<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Author</label>
        <input type="text" name="author">
    </div>
    <div>
        <label>Category</label>
        <input type="text" name="cat_id">
    </div>
    <button type="submit">Save</button>
</form>
