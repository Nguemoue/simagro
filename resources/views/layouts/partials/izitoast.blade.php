<script  defer>
    $(function (){

        @if($errors->any())
        iziToast.error({
            message: `<ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach</ul>`,
            toast: true,
            position: "{{config('setup.toast_position','topLeft')}}"
        });
        @endif

        @if(session()->has('success'))
        iziToast.success({
            message: "{{session('success')}}",
            // toast: true,
            position: "{{config('setup.toast_position','topLeft')}}"
        });
        @endif

        @if(session()->has('status'))
        iziToast.success({
            message: `<li>{{session('status')}}</li>`,
            toast: true,
            position: "{{config('setup.toast_position','topLeft')}}"
        });
        @endif

        @if(session()->has('warning'))
        iziToast.warning({
            message: `<li>{{session()->get('warning')}}</li>`,
            toast: true,
            position: "{{config('setup.toast_position','topLeft')}}"
        });

        @endif

        @if(session()->has('info'))
        iziToast.info({
            message: `<li>{{session()->get('info')}}</li>`,
            toast: true,
            position: "{{config('setup.toast_position','topLeft')}}"
        });
        @endif

    })
</script>
