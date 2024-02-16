<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Train</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Treni in partenza oggi</h1>
                </div>
                <div class="col-12">

                    <table class="table table-striped m-5">
                        <thead>
                            <tr>
                                <th>Azienda</th>
                                <th>Stazione di partenza</th>
                                <th>Stazione di arrivo</th>
                                <th>Orario di partenza</th>
                                <th>Orario di arrivo</th>
                                <th>Codice</th>
                                <th>Carrozze</th>
                                <th>Ritardo</th>
                                <th>Cancellato</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trains as $train)
                                @if ($train->departure_time == '2024-02-15')
                            <tr>
                                <td class="p-2">{{$train->factory}}</td>
                                <td class="p-2">{{$train->departure_station}}</td>
                                <td class="p-2">{{$train->arrival_station}}</td>
                                <td class="p-2">{{$train->departure_time}}</td>
                                <td class="p-2">{{$train->arrival_time}}</td>
                                <td class="p-2">{{$train->train_code}}</td>
                                <td class="p-2">{{$train->n_train_cars}}</td>
                                <td class="p-2">
                                    @if ($train->delay == 1)
                                        Si
                                    @else
                                        No
                                    @endif
                                </td>
                                <td class="p-2">
                                    @if ($train->deleted == 1)
                                    Si
                                @else
                                    No
                                @endif
                            </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </body>

</html>