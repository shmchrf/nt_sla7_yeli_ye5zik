

<table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Formation</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom du Chapitre</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom de l'unité</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nombre des Heures</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                    </tr>
                                </thead> 
                                <tbody>
                                    @foreach($contenues as $contenue)
                                    <tr>
                                        <td>{{ $contenue->id }}</td>
                                        <td><a href="javascript:void(0)" id="show-formation" data-id="{{ $contenue->id }}" >{{ $contenue->formation->nom ?? 'N/A' }}</a></td>
                                        <td>{{ $contenue->nomchap}}</td>
                                        <td>{{ $contenue->nomunite}}</td>
                                        <td>{{ $contenue->nombreheures }}</td>
                                        <td>{{ $contenue->description }}</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" id="edit-contenue" data-id="{{ $contenue->id }}" class="btn btn-info"><i class="material-icons opacity-10">border_color</i></a>
                                            <a href="javascript:void(0)" id="delete-contenue" data-id="{{ $contenue->id }}" class="btn btn-danger"><i class="material-icons opacity-10">delete</i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $contenues->links() }}


