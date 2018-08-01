
<div class="col-md-12">
    <div class="form-group margin-b-5 margin-t-5{{ $errors->has('tipo') ? ' has-error' : '' }}">
        <label for="Tipo">Tipo *</label>
        <!-- <input type="text" class="form-control" name="marca" placeholder="Marca" value="{{ old('marca', $record->marca) }}" required> -->

        <select class="form-control" name="tipo">
            <option value="">Selecione um tipo</option>
            <option value="caminhao">Caminhão</option>
            <option value="onibus">Ônibus</option>
        </select>

        @if ($errors->has('tipo'))
            <span class="help-block">
                <strong>{{ $errors->first('tipo') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group margin-b-5 margin-t-5{{ $errors->has('marca') ? ' has-error' : '' }}">
        <label for="marca">Marca *</label>
        <input type="text" class="form-control" name="marca" placeholder="Marca" value="{{ old('marca', $record->marca) }}" required>

        @if ($errors->has('marca'))
            <span class="help-block">
                <strong>{{ $errors->first('marca') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group margin-b-5 margin-t-5{{ $errors->has('km_inicial') ? ' has-error' : '' }}">
        <label for="km_inicial">Km Inicial *</label>
        <input type="text" class="form-control" name="km_inicial" placeholder="Km Inicial" value="{{ old('km_inicial', $record->km_inicial) }}" required>

        @if ($errors->has('km_inicial'))
            <span class="help-block">
                <strong>{{ $errors->first('km_inicial') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group margin-b-5 margin-t-5{{ $errors->has('trem_forca') ? ' has-error' : '' }}">
        <label for="Tipo">Trem de força? *</label>
        <!-- <input type="text" class="form-control" name="marca" placeholder="Trem de Força" value="{{ old('trem_forca', $record->trem_forca) }}" required> -->

        <select class="form-control" name="trem_forca" id="">
            <option value="">Selecione um opção</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        @if ($errors->has('trem_forca'))
            <span class="help-block">
                <strong>{{ $errors->first('trem_forca') }}</strong>
            </span>
        @endif
    </div>

    <!-- /.form-group -->
</div>
<!-- /.col-md-12 -->