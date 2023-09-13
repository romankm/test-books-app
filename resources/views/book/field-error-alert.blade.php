@error($fieldName)
<div class="alert alert-danger my-1" role="alert">
    {{ $errors->first($fieldName) }}
</div>
@enderror
