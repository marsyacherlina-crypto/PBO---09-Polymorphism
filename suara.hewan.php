<?php
class Hewan {
    public function suara(): string { return "Suara hewan"; }
}
class Kucing extends Hewan {
    public function suara(): string { return "Meong!"; }
}
class Anjing extends Hewan {
    public function suara(): string { return "Guk guk!"; }
}
class Ayam extends Hewan {
    public function suara(): string { return "Kukuruyuk!"; }
}
class Sapi extends Hewan {
    public function suara(): string { return "Mooo!";}
}
class Bebek extends Hewan {
    public function suara(): string { return "Wek-wek!";}
}
class Kambing extends Hewan {
    public function suara(): string { return "Mbeeee!";}
}
function bunyikan(Hewan $objek) {
    echo $objek->suara() . "<br>";
}

bunyikan(new Kucing());
bunyikan(new Anjing());
bunyikan(new Ayam());
bunyikan(new Sapi());
bunyikan(new Bebek());
bunyikan(new Kambing());