@extends('dashboard.layout')

<section>
    <h1>Crear Post</h1>

@include('dashboard.fragment._errors-form')


<form action="{{ route('post.store')}}" method="post">
@csrf


<label for="">Título</label>
<input type="text" name="title">



<label for="">Slug</label>
<input type="text" name="slug">


<label for="">Categoria</label>

<select name="category_id" >
<option value=""></option> 
@foreach ($categories as $title => $id)
<option value="{{$id}}">{{$title}}</option> 
@endforeach
</select>

<label for="">Estado del Post</label>
<select name="posted" >
    <option value="not">No</option>
    <option value="yes">Si</option>
</select>





<label for="">Contenido</label>

<textarea name="content"></textarea>


<label for="">Descripción</label>

<textarea name="description"></textarea>


<button type="submit">Enviar</button>


</form> 


</section>