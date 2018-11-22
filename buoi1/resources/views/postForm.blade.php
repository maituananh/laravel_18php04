<form method='post' action="{{route('postForm')}}" >
    <p>name: </p>
    <input type='text' name='ten'>
    <input type='submit'>
    {{csrf_field()}}
</form>
<br>
<h1>
    <?php echo $name ?>
</h1>
