<!-- Kota Field -->
<div class="col-sm-12">
    {!! Form::label('kota', 'Kota:') !!}
    <p>{{ $peringatan->kota }}</p>
</div>

<!-- Isi Field -->
<div class="col-sm-12">
    {!! Form::label('isi', 'Isi:') !!}
    <p>{{ $peringatan->isi }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $peringatan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $peringatan->updated_at }}</p>
</div>

