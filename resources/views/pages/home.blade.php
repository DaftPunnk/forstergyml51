/**
 * Created by PhpStorm.
 * User: william
 * Date: 6/11/2015
 * Time: 11:30 AM
 */
@extends('layouts.master')

@section('styles')
    {!! Html::style('css/mystyles.css') !!}
@endsection

@section('content')
    @include('pages.partials.home-nav-bar')
    @include('pages.partials.home-jumbotron')
@endsection





