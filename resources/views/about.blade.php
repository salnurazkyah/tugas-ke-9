<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        table, th, td {
            border: 2px solid #dddddd;
            padding: 8px;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        td {
            background-color: honeydew;
        }
      
       
    </style>
</head>
<body>
    <h1 style="text-align: center; padding-top: 20px; color: darkorange; text-shadow: black 1px 1px 1px; margin-left: 10px;">About Me</h1>
    <table style="margin: auto;">
        <tr>
            <th>Data</th>
            <th>Informasi</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>{{ $nim }}</td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>{{ $programStudi }}</td>
        </tr>
        <tr>
            <td>Tahun Angkatan</td>
            <td>{{ $tahunAngkatan }}</td>
        </tr>
    </table>
</body>
</html>