@extends('dashboard.layout')

@section('content')

    <h1>Actualizar Post: {{$post->title}}</h1>

@include('dashboard.fragment._errors-form')


<form action="{{ route('post.update',$post->id)}}" method="post">
@csrf

@method("PUT")


<label for="">Título</label>
<input type="text" name="title" value={{$post->title}}>



<label for="">Slug</label>
<input type="text" name="slug" disabled value={{$post->slug}}>


<label for="">Categoria</label>

<select name="category_id" >
<option value=""></option> 
@foreach ($categories as $title => $id)
<option {{$post->category_id==$id ? 'selected': '' }} value="{{$id}}">{{$title}}</option> 
@endforeach
</select>

<label for="">Estado del Post</label>

<select name="posted" >

    <option {{$post->posted=="not" ? 'selected': '' }} value="not">No</option>
    <option {{$post->posted=="yes" ? 'selected': '' }} value="yes">Si</option>





<label for="">Contenido</label>

<textarea name="content" >{{$post->content}}</textarea>


<label for="">Descripción</label>

<textarea name="description" >{{$post->description}}</textarea>


<button type="submit">Enviar</button>


</form> 

@endsection