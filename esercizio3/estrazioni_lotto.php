<html>
    <body>

<?php 

function estrazione(){
    $estrazione = [];
    for($x=1; $x<=5; $x++){
        $estrazione[$x] = rand(1,90);
    }
    return $estrazione;
}

$ruote = array (
    "Bari" => estrazione(),
    "Cagliari" => estrazione(),
    "Firenze" => estrazione(),
    "Genova" => estrazione(),
    "Milano" => estrazione(),
    "Napoli" => estrazione(),
    "Palermo" => estrazione(),
    "Roma" => estrazione(),
    "Torino" => estrazione(),
    "Venezia" => estrazione(),
    "Nazionale" => estrazione(),
    
    
);

foreach ($ruote as $key => $value){
    print ($key);
    print_r ($value);
}

?>

<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Città</th>
      <th scope="colspan 4"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Bari</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


</body>
</html>
