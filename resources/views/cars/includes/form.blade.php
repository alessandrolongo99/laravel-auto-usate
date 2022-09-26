

<div class="mb-3">
    <label for="brand" class="form-label">Brand</label>
    <input name="brand" type="text" class="form-control
    @error('brand') is-invalid @enderror" id="brand"
    value="{{ old('brand',$car->brand ?? '') }}">
    <div class="form-text">Insert car's brand</div>
    @error('brand')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="model" class="form-label">model</label>
    <input name="model" type="text" class="form-control" id="model"
    value="{{ old('model',$car->model ?? '') }}">
    <div class="form-text">Insert car's model</div>
    @error('model')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="color" class="form-label">Color</label>
    <input name="color" type="text" class="form-control" id="color"
    value="{{ old('color',$car->color ?? '') }}">
    <div class="form-text">Insert car's color</div>
    @error('color')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="mileage" class="form-label">mileage</label>
    <input name="mileage" type="text" class="form-control" id="mileage"
    value="{{ old('mileage',$car->mileage ?? '') }}">
    <div class="form-text">Insert car's mileage</div>
    @error('mileage')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="license_plate" class="form-label">license_plate</label>
    <input name="license_plate" type="text" class="form-control" id="license_plate"
    value="{{ old('license_plate',$car->license_plate ?? '') }}">
    <div class="form-text">Insert car's license_plate</div>
    @error('license_plate')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
@foreach ($optionals as $optional)
<div class="p-2">
  @if ($errors->any())
    <input type="checkbox" name="optionals[]" id="optionals" value="{{ $optional->id }}"
    {{ in_array($optional->id, old('optionals', [])) ? 'checked' : ''}}>
    {{ $optional->name }}
  @else
    <input type="checkbox" name="optionals[]" id="optionals" value="{{ $optional->id }}"
    {{ $car->optionals->contains($optional) ? 'checked' : '' }}>
    {{ $optional->name }}
  @endif
</div>
@endforeach
@error('optionals')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="d-flex justify-content-center">
    <button class="btn btn-lg btn-primary" type="submit">
        Save
    </button>
</div>

