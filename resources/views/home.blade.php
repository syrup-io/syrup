@extends('layouts.app')
<div class="ui top attached borderless large menu" id="main">
  <div class="ui dropdown icon item" onclick="openNav()">
    <i class="fa fa-bars"></i>
  </div>
  <div class="header item centered aligned">
      Syrup
  </div>
  <div class="right menu">
    <a class="ui item">
      Sign In
    </a>
  </div>
  <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
  </div>
</div>
