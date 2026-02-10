@extends('layouts.app')

@section('content')
<h1>Presentation de lecole la plume</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsa corrupti saepe similique atque accusantium blanditiis aspernatur magnam totam? Doloremque pariatur error sit dolore dicta, quas deserunt voluptatem. Repellendus, facere.</p>

<x-article img="{{ asset('images/act1.jpeg') }}" titre="Premiere activite" para="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsa corrupti saepe similique atque accusantium blanditiis aspernatur magnam totam? Doloremque pariatur error sit dolore dicta, quas deserunt voluptatem. Repellendus, facere." url="/url1"></x-article>

<x-article img="{{ asset('images/act2.jpeg') }}" titre="Deuxieme activite" para="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsa corrupti saepe similique atque accusantium blanditiis aspernatur magnam totam? Doloremque pariatur error sit dolore dicta, quas deserunt voluptatem. Repellendus, facere." url="/url2"></x-article>

<x-article img="{{ asset('images/act3.jpeg') }}" titre="Troisieme activite" para="Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ipsa corrupti saepe similique atque accusantium blanditiis aspernatur magnam totam? Doloremque pariatur error sit dolore dicta, quas deserunt voluptatem. Repellendus, facere." url="/url3"></x-article>

@endsection