@extends('layouts.default',['title'=>'Contact'])

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 col-sm-10 offset-1">
                <h2>Get In Touch</h2>
                <p>If you having trouble with this service, please <a href="{{config('laracarte.admin_email')}}">ask for help</a>.</p>
                <form action="{{route('contact')}}" method="POST" novalidate>
                    {{csrf_field()}}
                    <div class="form-group {{ $errors->has('name')? 'has-error':'' }}">
                        <label class="control-label" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control }}" required="required" value="{{old('name')}}" >
                        {!!$errors->first('name','<span class="help-block">:message</span>')!!}
                        
                    </div>
                    <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                        <label class="control-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required="required" value="{{old('email')}}">
                         {!!$errors->first('email','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group {{$errors->has('message')? 'has-error':''}}">
                        <label class="control-label sr-only" for="message">Message</label>
                        <textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message">{{old('message')}} </textarea>
                         {!!$errors->first('message','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <button class="btn-primary btn-block" type="Submit" >Submit Enquiry &raquo;</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@stop