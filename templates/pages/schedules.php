<section class="containerSearchEngine">
    <form action="">
        <div class="column">
            <div class="col-md-5 mb-3">
                <label for="country">Wybierz numer linii</label>
                <select class="custom-select d-block w-100" id="country" required>
                    <option value="">Linia</option>
                    <option>United States</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid country.
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label for="state">Wybierz przystanek początkowy</label>
                <select class="custom-select d-block w-100" id="state" required>
                    <option value="">Przystanek</option>
                    <option>California</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <label for="zip">Wybierz godzinę odjazdu</label>
                <input type="time" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                    Zip code required.
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <button class="btn btn-secondary btn-block" type="submit">Wyszukaj połączenie
                </button>
            </div>

        </div>
    </form>

</section>
<section class="containerChoiceBox">
    <div class="linesContainer">
        <p><i class="fas fa-subway"></i> <b>Tramwaje</b></p>
        <div class="tramLines">
            <a class="lineNumber">1</a>
            <a class="lineNumber">2</a>
            <a class="lineNumber">3</a>
            <a class="lineNumber">4</a>
            <a class="lineNumber">5</a>
            <a class="lineNumber">6</a>
            <a class="lineNumber">1</a>
            <a class="lineNumber">2</a>
            <a class="lineNumber">3</a>
            <a class="lineNumber">4</a>
            <a class="lineNumber">5</a>
            <a class="lineNumber">6</a>
            <a class="lineNumber">1</a>
            <a class="lineNumber">2</a>
            <a class="lineNumber">3</a>
            <a class="lineNumber">4</a>
            <a class="lineNumber">5</a>
            <a class="lineNumber">6</a>
            <a class="lineNumber">1</a>
            <a class="lineNumber">2</a>
            <a class="lineNumber">3</a>
            <a class="lineNumber">4</a>
            <a class="lineNumber">5</a>
            <a class="lineNumber">6</a>
            <a class="lineNumber">1</a>
            <a class="lineNumber">2222</a>
            <a class="lineNumber">3</a>
            <a class="lineNumber">4</a>
            <a class="lineNumber">5</a>
            <a class="lineNumber">6</a>
        </div>
    </div>
    <div class="linesContainer">
        <p><i class="fas fa-bus"></i> <b>Autobusy</b></p>
        <div class="busLines">
            <a class="lineNumber">1</a>
            <a class="lineNumber">2</a>
            <a class="lineNumber">3</a>
            <a class="lineNumber">4</a>
            <a class="lineNumber">5</a>
            <a class="lineNumber">6</a>
        </div>
    </div>
</section>