@extends('layouts.default')

@section('content')
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">About</div>

                    <div class="card-body">This is the about page.</div>
                </div>
            </div>
        </div>
    </div>

    <div id="app2"></div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script>
      let app2 = new Vue({
        el: '#app2',
        mounted() {
          console.log('Inline Component mounted.')
        },
        template: `<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">Inline Component</div>

                        <div class="card-body">
                            I’m an example of an inline Vue.js component.
                        </div>
                    </div>
                </div>
            </div>
        </div>`
      })
    </script>
@endsection
