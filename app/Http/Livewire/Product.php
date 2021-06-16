<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;

class Product extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;
    public $name, $image, $description, $qty, $price;

    public function render()
    {
        $products = ProductModel::orderBy('created_at', 'DESC')->paginate(2);
        return view('livewire.product',[
            'products' => $products
        ]);
    }

    public function priviewImage()
    {
        $this -> validate([
            'image' => 'image|max:3050'
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'image|max:3000|required',
            'description' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $imageName = md5($this->image.microtime()).'.'.$this->image->extension();

        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );

        ProductModel::create([
            'name' => $this->name,
            'image' => $imageName,
            'description' => $this->description,
            'qty' => $this->qty,
            'price' => $this->price 
        ]);

        session()->flash('info', 'Product Created Successfully');

        $this->name = '';
        $this->image = '';
        $this->description = '';
        $this->qty = '';
        $this->price = '';
    }

    public function destroy($id)
    {
        $products = ProductModel::find($id);

        if($products) {
            $products->delete();
        }
        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');
        //redirect
        return view('livewire.product',[
            'products' => $products
        ]);
    }
}