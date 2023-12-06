    <form action="{{ route('kustomisasi') }}" method="post" enctype="multipart/form-data"
        style="display: flex; flex-direction: column; width: 300px; margin: auto;">
        @csrf
        <label for="name" style="margin-bottom: 10px;">NAMA FURNITURE:</label>
        <input type="text" id="name" name="name" style="margin-bottom: 20px; padding: 10px;">

        <label for="description" style="margin-bottom: 10px;">DESKRIPSI:</label>
        <textarea id="description" name="description" style="margin-bottom: 20px; padding: 10px;"></textarea>

        <label for="image" style="margin-bottom: 10px;">Gambar:</label>
        <input type="file" id="image" name="image" style="margin-bottom: 20px;">

        <input type="submit" value="AJUKAN"
            style="padding: 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">
    </form>