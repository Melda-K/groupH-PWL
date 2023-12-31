<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Bookshelf;
use Illuminate\Support\Facades\Storage;
use App\Exports\BooksExport;

class BookController extends Controller
{
    public function index()
    {
        $data['barang'] = Barang::with('barangs')->get();
        return view('barang.index', $data);
    }

    public function create()
    {
        $data['barang'] = barangs::pluck('name', 'id');
        return view('barang.create', $data);
    }

    public function store(Request $request)
    {
        $valiated = $request->validate([
            'kode barang' => 'required|max:255',
            'nama barang' => 'required|max:150',
            'qty' => 'required|numeric',
            'harga' => 'required|numeric',
            'id_barang' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->storeAs(
                'public/cover_buku',
                'cover_buku_' . time() . '.' . $request->file('cover')->extension()
            );
            $valiated['cover'] = basename($path);
        }

        Barang::create($valiated);

        $notificaton = array(
            'message' => 'Barang berhasil ditambahkan! :D',
            'allert-type' => 'success'
        );

        if ($request->save == true) {
            return redirect()->route('barang')->with($notificaton);
        } else
            return redirect()->route('book.create')->with($notificaton);
    }

    public function edit(string $id)
    {
        $data['book'] = Barang::findOrFail($id);
        $data['bookshelves'] = Bookshelf::pluck('name', 'id');

        return view('books.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $book = Barang::findOrFail($id);

        $valiated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:150',
            'year' => 'required|digits:4|integer|min:1900|max:' . (date('Y')),
            'publisher' => 'required|max:100',
            'city' => 'required|max:75',
            'qty' => 'required|numeric',
            'bookshelf_id' => 'required',
            'cover' => 'nullable|image',
        ]);

        if ($request->hasFile('cover')) {
            if ($book->cover != null) {
                Storage::delete('/public/cover_buku/' . $request->old_cover);
            }

            $path = $request->file('cover')->storeAs(
                '/public/cover_buku',
                'cover_buku_' . time() . '.' . $request->file('cover')->extension()
            );

            $valiated['cover'] = basename($path);
        }

        Barang::where('id', $id)->update($valiated);

        $notificaton = array(
            'message' => 'Data buku berhasil diperbahharui',
            'alert-type' => 'success'
        );

        return redirect()->route('barang')->with($notificaton);
    }

    public function destroy(string $id)
    {
        $book = Barang::findOrFail($id);

        Storage::delete('public/cover_buku/' . $book->cover);

        $book->delete();

        $notificaton = array(
            'message' => 'Buku telah berhasil dihapus',
            'alert-type' => 'warning'
        );

        return redirect()->route('barang')->with($notificaton);
    }

    public function print()
    {
        $books = Barang::all();

        //$pdf = Pdf::loadview('books.print', ['books' => $books]);
        //return $pdf->download('data_buku.pdf');
    }

   // public function export()
   // {
      //  return Excel::download(new BooksExport, 'books.xlsx');
   // }
}