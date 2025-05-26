<!-- resources/views/upload.blade.php -->
<form action="{{ route('csv.to.json') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="csv_file" required>
    <button type="submit">Convertir a JSON</button>
</form>
