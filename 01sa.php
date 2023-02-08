<?php
$DreamTeam= array (
	array("id","species","type1","type2","ability","hp","attack","defense"),
  array(1,"Bulbasaur","Grass","Poison","Overgrow",45,49,49),
  array(2,"Ivysaur","Grass","Poison","Overgrow",60,62,63),
  array(3,"Venusaur","Grass","Poison","Overgrow",80,82,83),
  array(4,"Charmander","Fire","N/A","Blaze",39,52,43),
  array(5,"Charmeleon ","Fire","N/A","Blaze",58,64,58),
  array(6,"Charizard","Fire","Flying","Blaze",78,84,78),
  array(7,"Squirtle","Water","N/A","Torrent",44,48,65),
  array(8,"Venusaur","Water","N/A","Torrent",59,63,80),
  array(9,"Venusaur","Water","N/A","Torrent",79,83,100),
  array(10,"Caterpie ","Bug","N/A","Shield Dust",50,20,55),
);
  
echo " | ".$DreamTeam[0][0]." | ".$DreamTeam[0][1]." | ".$DreamTeam[0][2]." | ".$DreamTeam[0][3]." | ".$DreamTeam[0][4]." | ".$DreamTeam[0][5]." | ".$DreamTeam[0][6]." | ".$DreamTeam[0][7]." | "."<br>";
echo "----------------------------------------------------------"."<br>";
for ($i=1; $i<count($DreamTeam); $i++) {
  echo " | ".$DreamTeam[$i][0]." | ".$DreamTeam[$i][1]." | ".$DreamTeam[$i][2]." | ".$DreamTeam[$i][3]." | ".$DreamTeam[$i][4]." | ".$DreamTeam[$i][5]." | ".$DreamTeam[$i][6]." | ".$DreamTeam[$i][7]." | "."<br>";
}
echo "<br>";
echo "<br>";
echo "Number of Elements in Array: ".count($DreamTeam);
echo "<br>";
echo "<br>";
$favourite = $DreamTeam[6][1];
echo "My Favourite: ".$favourite;
echo "<br>";
echo "<br>";
	echo "List of the Species of Pokemons are:"."<br>";
  $species = array();

  for($i = 1; $i < count($DreamTeam); $i++) {
      array_push($species, $DreamTeam[$i][1]);
  }
  foreach($species as $species) {
    echo $species."<br>";
  }
?>
