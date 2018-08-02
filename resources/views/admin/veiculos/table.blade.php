<div class="table-responsive list-records">
    <table class="table table-hover table-bordered">
        <thead>
            <th width="1">#</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>Km Inicial</th>
            <th>Trem de Força?</th>
            <th style="width: 100px;">Actions</th>
        </thead>
        <tbody>
        @foreach ($records as $record)
            <?php
            $tableCounter++;
            $editLink = route($resourceRoutesAlias.'.edit', $record->id);
            $deleteLink = route($resourceRoutesAlias.'.destroy', $record->id);
            $formId = 'formDeleteModel_'.$record->id;

            $canUpdate = Auth::user()->can('update', $record);
            $canDelete = Auth::user()->can('delete', $record);
            ?>
            <tr>
                <td>{{ $tableCounter }}</td>

                <td class="table-text">
                    <a href="{{ $editLink }}">{{ $record->marca }}</a>
                </td>
                <td>{{ $record->tipo }}</td>
                <td>{{ number_format($record->km_inicial, 0, '', '.') }} km</td>
                <td>{{ $record->trem_forca }}</td>

                <!-- <td class="table-text">
                    <a href="{{ $editLink }}">{{ $record->name }}</a>
                </td> -->
                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <div class="btn-group">
                        @if ($canUpdate)
                            <a href="{{ $editLink }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                        @endif
                        @if ($canDelete)
                            <a href="#" class="btn btn-danger btn-sm btnOpenerModalConfirmModelDelete"
                               data-form-id="{{ $formId }}"><i class="fa fa-trash-o"></i></a>
                        @endif
                    </div>
                    @if ($canDelete)
                        <!-- Delete Record Form -->
                        <form id="{{ $formId }}" action="{{ $deleteLink }}" method="POST"
                              style="display: none;" class="hidden form-inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>