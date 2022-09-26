

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input name="brand" type="text" class="form-control" id="title"
    value="{{ old('brand',$car->brand ?? '') }}">
    <div class="form-text">Insert car's title</div>
</div>

<div class="mb-3">
    <label for="model" class="form-label">model</label>
    <input name="model" type="text" class="form-control" id="model"
    value="{{ old('model',$car->model ?? '') }}">
    <div class="form-text">Insert car's model</div>
</div>

<div class="mb-3">
    <label for="color" class="form-label">Color</label>
    <input name="color" type="text" class="form-control" id="color"
    value="{{ old('color',$car->color ?? '') }}">
    <div class="form-text">Insert car's color</div>
</div>

<div class="mb-3">
    <label for="mileage" class="form-label">mileage</label>
    <input name="mileage" type="text" class="form-control" id="mileage"
    value="{{ old('mileage',$car->mileage ?? '') }}">
    <div class="form-text">Insert car's mileage</div>
</div>

<div class="mb-3">
    <label for="license_plate" class="form-label">license_plate</label>
    <input name="license_plate" type="text" class="form-control" id="license_plate"
    value="{{ old('license_plate',$car->license_plate ?? '') }}">
    <div class="form-text">Insert car's license_plate</div>
</div>
@foreach ($optionals as $optional)
<div class="p-2">
  @if ($errors->any())
    <input type="checkbox" name="optionals[]" id="optionals" value="{{ $optional->id }}"
    {{ in_array($optional->id, old('optionals', [])) ? 'checked' : ''}}>
    #{{ $optional->name }}
  @else
    <input type="checkbox" name="optionals[]" id="optionals" value="{{ $optional->id }}"
    {{ $car->optionals->contains($optional) ? 'checked' : '' }}>
    #{{ $optional->name }}
  @endif
</div>
@endforeach

<div class="d-flex justify-content-center">
    <button class="btn btn-lg btn-primary" type="submit">
        Save
    </button>
</div>

