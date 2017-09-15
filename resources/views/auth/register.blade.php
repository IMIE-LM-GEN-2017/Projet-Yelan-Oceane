@extends('templates.default')

@section('title', 'Inscription')

@section('content')
    <div class="container is-centered"
         style="text-align: center;
                margin-left: 8.5em; margin-right: 8.5em; margin-bottom: 10em;
                padding: 2em;
                background-color: 9BA5CC;">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="field">
                <label for="pseudo" class="label">Pseudo</label>
                <input id="pseudo"
                       class="control"
                       type="text"
                       name="pseudo"
                       value="{{ old('pseudo') }}"
                       placeholder="Dark Babor"
                       required autofocus>
                @if ($errors->has('pseudo'))
                    <strong>{{ $errors->first('pseudo') }}</strong>
                @endif
            </div>
            <div class="field">
                <label for="email" class="label">Adresse mail</label>
                <input id="email"
                       class="control"
                       type="email"
                       name="email"
                       value="{{ old('email') }}"
                       placeholder="nadette@free.com"
                       required>
                @if ($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
            </div>
            <div class="field">
                <label for="password" class="label">Mot de passe</label>
                <input id="password"
                       class="control"
                       type="password"
                       name="password"
                       placeholder="1mO2passeSUPER!s0li2!"
                       required>
                @if ($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
            </div>
            <div class="field">
                <label for="password-confirm" class="label">Confirme ton mot de passe</label>
                <input id="password-confirm"
                       class="control"
                       type="password"
                       name="password_confirmation"
                       placeholder="1mO2passeSUPER!s0li2!"
                       required>
            </div>
            <div class="field">
                <label for="firstname" class="label">Prénom</label>
                <input id="firstname"
                       class="control"
                       type="text"
                       name="firstname"
                       value="{{ old('firstname') }}"
                       placeholder="Kevin"
                       required autofocus>
            </div>
            <div class="field">
                <label for="lastname" class="label">Nom</label>
                <input id="lastname"
                       class="control"
                       type="text"
                       name="lastname"
                       value="{{ old('lastname') }}"
                       placeholder="Dalletto"
                       required autofocus>
            </div>
            <div class="field">
                <label for="birthdate" class="label">Date de naissance</label>
                <input id="birthdate"
                       class="control"
                       type="date"
                       name="birthdate"
                       value="{{ old('birthdate') }}"
                       placeholder="15/12/1991"
                       required autofocus>
            </div>
            <div class="field">
                <label for="description" class="label">Description</label>
                <textarea id="description"
                          class="textarea"
                          name="description"
                          value="{{ old('description') }}"
                          placeholder="Je vis avec mon coloc et nos trois chiens. Nous ne sommes pas fumeurs."
                          required autofocus></textarea>
            </div>
            <div class="field">
                <label for="adressname" class="label">Adresse : n° et nom de voie</label>
                <input id="adressname"
                       class="control"
                       type="text"
                       name="adressname"
                       value="{{ old('adressname') }}"
                       placeholder="45 avenue des ruisseaux"
                       required autofocus>
            </div>
            <div class="field">
                <label for="pc" class="label">Code Postal</label>
                <input id="pc"
                       class="control"
                       type="text"
                       name="pc"
                       value="{{ old('pc') }}"
                       placeholder="81000"
                       required autofocus>
            </div>

            <div class="field">
                <label for="city" class="label">Ville</label>
                <input id="city"
                       class="control"
                       type="text"
                       name="city"
                       value="{{ old('city') }}"
                       placeholder="Albi"
                       required autofocus>
            </div>
            <div class="field">
                <label for="department" class="label">Département</label>
                <div class="select">
                    <select id="department"
                            name="department"
                            value="{{ old('department') }}"
                            required autofocus>>
                        <option>Sélectionne ton département</option>
                        <option>01 - Ain</option>
                        <option>02 - Aisne</option>
                        <option>03 - Allier</option>
                        <option>04 - Alpes-de-Haute-Provence</option>
                        <option>05 - Hautes-Alpes</option>
                        <option>06 - Alpes-Maritimes</option>
                        <option>07 - Ardèche</option>
                        <option>08 - Ardennes</option>
                        <option>09 - Ariège</option>
                        <option>10 - Aube</option>
                        <option>11 - Aude</option>
                        <option>12 - Aveyron</option>
                        <option>13 - Bouches-de-Rhône</option>
                        <option>14 - Calvados</option>
                        <option>15 - Cantal</option>
                        <option>16 - Charente</option>
                        <option>17 - Charente-Maritime</option>
                        <option>18 - Cher</option>
                        <option>19 - Corrèze</option>
                        <option>2A - Corse-de-Sud</option>
                        <option>2B - Haute-Corse</option>
                        <option>21 - Côte-d'Or</option>
                        <option>22 - Côtes-d'Armor</option>
                        <option>23 - Creuse</option>
                        <option>24 - Dordogne</option>
                        <option>25 - Doubs</option>
                        <option>26 - Drôme</option>
                        <option>27 - Eure</option>
                        <option>28 - Eure-et-Loire</option>
                        <option>29 - Finistère</option>
                        <option>30 - Gard</option>
                        <option>31 - Haute-Garonne</option>
                        <option>32 - Gers</option>
                        <option>33 - Gironde</option>
                        <option>34 - Hérault</option>
                        <option>35 - Ille-et-Vilaine</option>
                        <option>36 - Indre</option>
                        <option>37 - Indre-et-Loire</option>
                        <option>38 - Isère</option>
                        <option>39 - Jura</option>
                        <option>40 - Landes</option>
                        <option>41 - Loir-et-Cher</option>
                        <option>42 - Loire</option>
                        <option>43 - Haute-Loire</option>
                        <option>44 - Loire-Atlantique</option>
                        <option>45 - Loiret</option>
                        <option>46 - Lot</option>
                        <option>47 - Lot-et-Garonne</option>
                        <option>48 - Lozère</option>
                        <option>49 - Maine-et-Loire</option>
                        <option>50 - Manche</option>
                        <option>51 - Marne</option>
                        <option>52 - Haute-Marne</option>
                        <option>53 - Mayenne</option>
                        <option>54 - Meurthe-et-Moselle</option>
                        <option>55 - Meuse</option>
                        <option>56 - Morbihan</option>
                        <option>57 - Moselle</option>
                        <option>58 - Nièvre</option>
                        <option>59 - Nord</option>
                        <option>60 - Oise</option>
                        <option>61 - Orne</option>
                        <option>62 - Pas-de-Calais</option>
                        <option>63- Puy-de-Dôme</option>
                        <option>64 - Pyrénées-Atlantiques</option>
                        <option>65 - Hautes-Pyrénées</option>
                        <option>66 - Pyrénées-Orientales</option>
                        <option>67 - Bas-Rhin</option>
                        <option>68 - Haut-Rhin</option>
                        <option>69 - Rhone</option>
                        <option>70 - Haute-Saône</option>
                        <option>71 - Saône-et-Loire</option>
                        <option>72 - Sarthe</option>
                        <option>73 - Savoie</option>
                        <option>74 - Haute-Savoie</option>
                        <option>75 - Paris</option>
                        <option>76 - Seine-Maritime</option>
                        <option>77 - Seine-et-Marne</option>
                        <option>78 - Yvelines</option>
                        <option>79 - Deux-Sèvres</option>
                        <option>80 - Somme</option>
                        <option>81 - Tarn</option>
                        <option>82 - Tarn-et-Garonne</option>
                        <option>83 - Var</option>
                        <option>84 - Vaucluse</option>
                        <option>85 - Vendée</option>
                        <option>86 - Vienne</option>
                        <option>87 - Haute-Vienne</option>
                        <option>88 - Vosges</option>
                        <option>89 - Yonne</option>
                        <option>90 - Territoire de Belfort</option>
                        <option>91 - Essonne</option>
                        <option>92 - Hauts-de-Seine</option>
                        <option>93 - Seine-Saint-Denis</option>
                        <option>94 - Val-de-Marne</option>
                        <option>95 - Val-d'Oise</option>
                        <option>971 - Guadeloupe</option>
                        <option>972 - Martinique</option>
                        <option>973 - Guyanne</option>
                        <option>974 - La Réunion</option>
                        <option>976 - Mayotte</option>
                    </select>
                </div>
            </div>
            <div class="field">
                <label for="region" class="label">Région</label>
                <div class="select">
                    <select id="region"
                            name="region"
                            value="{{ old('region') }}"
                            required autofocus>>
                        <option>Sélectionne ta région</option>
                        <option>Alsace</option>
                        <option>Aquitaine</option>
                        <option>Auvergne</option>
                        <option>Basse-Normandie</option>
                        <option>Bourgogne</option>
                        <option>Bretagne</option>
                        <option>Centre</option>
                        <option>Champagne-Ardenne</option>
                        <option>Corse</option>
                        <option>Frache-Comté</option>
                        <option>Guyane</option>
                        <option>Haute-Normandie</option>
                        <option>Ile-de-France</option>
                        <option>La Réunion</option>
                        <option>Languedoc-Roussillon</option>
                        <option>Limousin</option>
                        <option>Lorraine</option>
                        <option>Martinique</option>
                        <option>Midi-Pyrénées</option>
                        <option>Nord-Pas-de-Calais</option>
                        <option>Pays de la Loire</option>
                        <option>Picardie</option>
                        <option>Poitou-Charentes</option>
                        <option>Provence-Alpes-Côte d'Azur</option>
                        <option>Rhône-Alpes</option>
                    </select>
                </div>
            </div>
            <div>
                <a href="{{ route('Home') }}"
                   class="button is-info">Annuler
                </a>
            </div>
            <br/>
            <button type="submit" class="button is-primary">
                Enregistrer
            </button>
        </form>
    </div>
@endsection
