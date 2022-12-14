<?php
$db = mysqli_connect("localhost", "root", "", "gowno");

$sql = "SELECT Nazwisko, Imie, Stopien, Data_urodzenia, Odznaczenia FROM piloci";
$result = mysqli_query($db, $sql);

echo "<table>";
echo "<tr><th>Nazwisko</th><th>Imie</th><th>Stopien</th><th>Data urodzenia</th><th>Odznaczenia</th></tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Nazwisko'] . "</td>";
    echo "<td>" . $row['Imie'] . "</td>";
    echo "<td>" . $row['Stopien'] . "</td>";
    echo "<td>" . $row['Data_urodzenia'] . "</td>";
    echo "<td>" . $row['Odznaczenia'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($db);

?>