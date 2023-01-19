<?php 

trait goodNight{
    public function nite(){
        echo"Good night sweetie pie";
    }
}
trait goodAfnoon{
    public function afnoon(){
    echo"Good Afternoon ladies";
    }
}
trait goodMorning{
    public function mornen(){
        echo"Good Morning lil pumpkin";
    }
}

class niteTalk{
    use goodNight;
}
class afnooTalk{
    use goodAfnoon;

}
class mornenTalk{
    use goodMorning;
}

$talk = new niteTalk();
$talk->nite();
echo"<br>'*•.¸♡ ♡¸.•*'<br>";
echo"<br>☄. *. ⋆☄. *. ⋆";
$talkey= new afnooTalk();
$talkey->afnoon();
echo"<br>＊*•̩̩͙✩•̩̩͙*˚　　˚*•̩̩͙✩•̩̩͙*˚＊<br>";
$talky = new mornenTalk();
$talky->mornen();













?>