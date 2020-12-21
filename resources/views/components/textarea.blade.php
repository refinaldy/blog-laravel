<div class="form-group">
    <label for="{{$field}}">{{ $label }}</label>
    <textarea class="form-control" id="{{$field}}" rows="3" 
    name="{{$field}}">
@isset($value){{old('subject') ? old('subject') : $value }}
@else {{old($field)}} @endisset    
</textarea>
    
    @error($field)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>