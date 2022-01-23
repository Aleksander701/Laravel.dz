
@extends('main')

@section('title')
Новости
@endsection

@section('content')
     <p>Страница добавления новостей</p>
     
     <form action="#" method="post">
                <div class="form-group">
           
                   <div class="form-group">
               <label for="subject">Тема сообщения</label>
               <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
               </div>
           
                   <div class="form-group">
               <label for="message">Сообщение</label>
               <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
               </div>
           
           <button type="submit" class="btn btn-success">Отправить</button>
           
       </form>

@endsection
