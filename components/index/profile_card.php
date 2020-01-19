<?php
$names = array(
  "Mattia Toselli"=>'Ingegnere Energetico laureato presso il Politecnico di Torino. Sistemista Linux, DevOps e Fullstack developer.',
  "Nicolò Doni"=>'descrizione nicolò',
  'Federico Rapetti'=>'Ingegnere Informatico laureato all\'università del Piemonte orientale. Specializzato in C# ed ambito .Net Core. Competenze in Java, C++, C, Lua, Python e Ruby.',
  'Enzo Zizza'=>'Studente di ingegneria informatica, esperto in C e Java, programmazione funzionale e sistemi operativi.',
);
$propic = array(
  "Mattia Toselli"=>'<img src="img/contributors/mattia-toselli.jpg" class="rounded-circle img-profile" alt="Mattia Toselli avatar">',
  'Federico Rapetti'=>'<img src="img/contributors/federico-rapetti.jpg" class="rounded-circle img-profile" alt="Federico Rapetti avatar">',
  "Nicolò Doni"=>'<img src="img/contributors/nicolo-doni.jpg" class="rounded-circle img-profile" alt="Nicolò Doni avatar">',
  'Enzo Zizza'=>'<img src="img/contributors/enzo-zizza.jpg" class="rounded-circle img-profile" alt="Enzo Zizza avatar">',
);
foreach ($names as $key => $value) {
  echo '<div class="col-md-6 col-lg-6">
    <div class="card">
      <div class="avatar mx-auto white">'
      .
      $propic[$key]
      .
      '</div>
      <div class="card-body">
      <h4 class="card-title font-weight-bold">'
      .
      $key
      .
      '</h4><hr><p class="mb-5" style="text-align:left;">'
      .
      $names[$key]
      .
      '</p></div>
      </div>
      <!--Card-->
      </div>'
      ;
}
 ?>
