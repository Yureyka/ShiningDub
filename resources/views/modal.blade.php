<div class="modal delete-modal" name="{{$id}}">
    <div class="modal-inner">
        <h2 class="modal__title">Подтвердите удаление</h2>
        <button class="modal__close" onclick="closeDeleteModal('{{$id}}')">
            <img src="{{ asset('img/close.svg') }}" alt="">
        </button>
        <form class="modal-form" action="{{URL::route($route, $id)}}" method="POST">
            {!! method_field('delete') !!}
            {!! csrf_field() !!}

            <button class="button modal-button">Подтвердить</button>
        </form>
    </div>
</div>