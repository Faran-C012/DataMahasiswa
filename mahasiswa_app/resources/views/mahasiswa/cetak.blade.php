<!DOCTYPE html>
<html>
<head>
    <title>Struk Mahasiswa</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .struk { border: 1px solid #000; padding: 20px; width: 300px; }
    </style>
</head>
<body onload="window.print()">
    <div class="struk">
        <h3>Struk Mahasiswa</h3>
        <p><strong>Nama:</strong> {{ $mhs->nama }}</p>
        <p><strong>NIM:</strong> {{ $mhs->nim }}</p>
        <p><strong>Jurusan:</strong> {{ $mhs->jurusan }}</p>
        <p><small>Dicetak: {{ now() }}</small></p>
    </div>
</body>
</html>
