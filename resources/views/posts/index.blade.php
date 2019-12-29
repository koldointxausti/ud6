@extends('layouts.app')

@section('content')
<br>
  <!-- Page Content -->
  <div class="container">
  <a href= "{{route('posts.create')}}"><button type="button" class="btn btn-secondary">New Post</button></a><br><br>
  

  <table class="table table-condensed">
    <thead>
      <tr class="bg-dark text-light">
        <th>Id</th>
        <th>Title</th>
        <th>Fecha/Hora</th>
        <th>Category</th>
        <th style="width:15px">View</th>
        <th style="width:15px">Edit</th>
        <th style="width:15px">Delete</th>
      </tr>
      </thead>
    <tbody>
      @foreach ($posts as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->title}}</td>
        <td>{{date("d/m/Y H:i:s", strtotime($p->published_at))}}</td>
        <td>{{$p->category->name}}</td>
        <td>
        <a title="Ver" href="{{route ('posts.show',$p->id)}}">View</a>
        </td>
        <td>
          <a title="Editar" href="{{route ('posts.edit',$p->id)}}">Edit</a>
        </td>
        <td>
        <form style="display:inline" action="{{ route('posts.destroy',$p->id) }}" method="POST">
           {{ method_field('DELETE') }}
           {{ csrf_field() }}
           <button type="submit" id="delete" style="background: none;padding: 0px;border: none;color:red">
              Delete
            </button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
  <!-- /.container -->

  @endsection