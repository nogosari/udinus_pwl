<!DOCTYPE HTML>  
<html>

<head>
    <title>Latihan</title>
</head>
<style>
    th {
    text-align: left;
    }
</style>

<body> 
    <form method="POST" action="proseslatihan.php"> 
    <table >
        <tbody>
        <tr>
            <td>NIM :</td>
            <td><input type="text" name="nim"></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <td>Program Studi :</td>
            <td>
                <select name="pstudi">
                    <option value="A11">S1-Teknik Informatika</option>
                    <option value="A12">S1-Sistem Informasi</option>
                    <option value="A22">D3-Teknik Informatika</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nilai Tugas:</td>
            <td><input type="number" max="100" name="ntgs"></td>
        </tr>
        <tr>
            <td>Nilai UTS:</td>
            <td><input type="number" max="100" name="nuts"></td>
        </tr>
        <tr>
            <td>Nilai UAS:</td>
            <td><input type="number" max="100" name="nuas"></td>
        </tr>
        <tr>
            <td rowspan="3">Catatan Khusus :</td>
            <td><input type="checkbox" name="notes" value="Kehadiran >= 70 %">Kehadiran >= 70 %</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="notes" value="Interaktif dikelas">Interaktif dikelas</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="notes" value="tidak terlambat mengumpulkan tugas">tidak terlambat mengumpulkan tugas</td>
        </tr>
        </tbody>
    </table>
    <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>
