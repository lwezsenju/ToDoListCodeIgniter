<?php
  
  helper('form');
   echo form_open("/",['class'=>"mt-5 flex items-center w-full border border-lightdark focus-within:border-white transition delay-150 rounded-2xl p-2"]);
  $inputclasses = "bg-transparent border-0  focus:border-0 focus:ring-0";
  
   $title=['name' => 'title',
   'id' => 'title',
   'required' => true,
   'size'=>'20',
   'class'=>$inputclasses . " w-52",
   'value'=> old('title'),
   "placeholder"=>"title"
  ];
  $description=['name' => 'description',
   'id' => 'description',
   'required' => true,
   'size'=>'300',
   'class'=>$inputclasses . " w-full",
   'value'=> old('description'),
   "placeholder"=>"description"
  ];
  $btn = ["name"=>"btnSubmit",
  "id"=>"btnSubmit",
  "type"=>"submit",
  "content"=>'<i class="bi bi-plus-lg"></i>',
  "class"=>"text-black w-8 h-8 bg-pink text-center rounded-xl flex-shrink-0"];
  // echo form_submit('btnSubmit', '<i class="bi bi-plus-lg"></i>', ['class'=>"text-black w-8 h-8 bg-pink text-center rounded-xl flex-shrink-0"]);
  echo form_button ($btn);
  echo form_input($title);
  echo form_input($description);
   ?>
   <?= 
        form_close();  
   ?>