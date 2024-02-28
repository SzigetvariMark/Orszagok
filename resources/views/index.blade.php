<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Orszag</title>
  </head>
  <body>
    <div class="context">
      <hr />
      <h2>Legek:</h2>
      A
      <select><option>legnagyobb</option></select>
      <select><option>területű</option></select>ország<select><option>a világon</option></select>:
      <input type="text" placeholder="irj ide egy országot" />
      <h2>Földrészek adatai:</h2>
      <div>
        <input type="checkbox" id="europa" name="europa" />
        <label for="europa">Európa</label>
      </div>
      <div>
        <input type="checkbox" id="azsia" name="azsia" />
        <label for="azsia">Ázsia</label>
      </div>
      <div>
        <input type="checkbox" id="afrika" name="afrika" />
        <label for="afrika">Afrika</label>
      </div>
      <div>
        <input type="checkbox" id="amerika" name="amerika" />
        <label for="amerika">Amerika</label>
      </div>
      <div>
        <input type="checkbox" id="ausztralia" name="ausztralia" />
        <label for="ausztralia">Ausztrália</label>
      </div>
      <div>
        <input type="checkbox" id="oceania" name="oceania" />
        <label for="oceania">Óceánia</label>
      </div>
      <div>
        <p>A kiválasztott földrészek:</p>
        <ul>
          <li> darab országnak ad(nak) otthont.</li>
          <li>Területe: km²</li>
          <li>Népessége: fő</li>
          <li>Népsűrűsége: /km²</li>
        </ul>
      </div>
      <br>
<form method="GET" action="{{ route('search') }}">
    <label for="country_name">Ország keresése:</label>
    <input type="text" id="country_name" name="country_name">
    <button type="submit">Keresés</button>
</form>

@if(isset($country))
    <h2>A keresett ország:</h2>
    <p>Neve: {{ $country->nev }}</p>
    <p>Fővárosa: {{ $country->fovaros }}</p>
    <p>Területe: {{ $country->terulet }} km²</p>
    <p>Népessége: {{ $country->nepesseg }} ezer fő</p>
    <p>Népsűrűsége: {{ $country->nepesseg_suruseg }}/km²</p>
@endif

    </div>
  </body>
</html>