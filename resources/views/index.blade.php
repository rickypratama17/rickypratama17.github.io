<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <title>Document</title>
</head>
<body>

    <form action="{{route('cari')}}" name="formCari" method="POST">
        @csrf
        <h1>CARI</h1>
        <div class="Stat">
        <div class="Stat" id="relicMain">
            <div class="inputStat">
                <label for="scatk">ATK</label>
                <input type="checkbox" id="scatk" name="statInput[]" value="ATK">
            </div>
            <div class="inputStat">
                <label for="scatk%">ATK%</label>
                <input type="checkbox" id="scatk%" name="statInput[]" value="ATK%">
            </div>
            <div class="inputStat">
                <label for="schp">HP</label>
                <input type="checkbox" id="schp" name="statInput[]" value="HP">
            </div>
            <div class="inputStat">
                <label for="schp%">HP%</label>
                <input type="checkbox" id="schp%" name="statInput[]" value="HP%">
            </div>
            <div class="inputStat">
                <label for="scdef">DEF</label>
                <input type="checkbox" id="scdef" name="statInput[]" value="DEF">
            </div>
            <div class="inputStat">
                <label for="scdef%">DEF%</label>
                <input type="checkbox" id="scdef%" name="statInput[]" value="DEF%">
            </div>
            <div class="inputStat">
                <label for="scspd">SPD</label>
                <input type="checkbox" id="scspd" name="statInput[]" value="SPD">
            </div>
            <div class="inputStat">
                <label for="sccr">CR</label>
                <input type="checkbox" id="sccr" name="statInput[]" value="CR">
            </div>
            <div class="inputStat">
                <label for="sccdm">CDM</label>
                <input type="checkbox" id="sccdm" name="statInput[]" value="CDM">
            </div>
            <div class="inputStat">
                <label for="scBreak">BREAK</label>
                <input type="checkbox" id="scBreak" name="statInput[]" value="BREAK">
            </div>
            <div class="inputStat">
                <label for="scEffectHit">EHR</label>
                <input type="checkbox" id="scEffectHit" name="statInput[]" value="EHR">
            </div>
            <div class="inputStat">
                <label for="scEffectRes">ER</label>
                <input type="checkbox" id="scEffectRes" name="statInput[]" value="ER">
            </div>
        </div>
        </div>
        

        <div class="mnStat">
            <input class="btn btn-primary" type="submit" value="CARI">
        </div>
    </form>

    <div class="accordion">
        @isset($query)
            @foreach ($query as $qr)
            <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    {{ $qr->level }}
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="tree">
                        <ul>
                            <li>
                                <table border="1px solid">
                                    <tr>
                                        <td cosplan="2" class="hasil">{{$qr->hasil}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{$qr->substat1}}</td>
                                        <td>{{$qr->submat1}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{$qr->substat2}}</td>
                                        <td>{{$qr->submat2}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{$qr->substat3}}</td>
                                        <td>{{$qr->submat3}}</td>
                                    </tr>
                                    <tr>
                                        <td>{{$qr->substat4}}</td>
                                        <td>{{$qr->submat4}}</td>
                                    </tr>
                                </table>
    
                                @isset($query2)
                                <ul>
                                    @foreach ($query2 as $qr2)
                                    <li>
                                            <table border="1px solid">
                                                <tr>
                                                    <td cosplan="2" class="hasil">{{$qr2->hasil}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{$qr2->substat1}}</td>
                                                    <td>{{$qr2->submat1}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{$qr2->substat2}}</td>
                                                    <td>{{$qr2->submat2}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{$qr2->substat3}}</td>
                                                    <td>{{$qr2->submat3}}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{$qr2->substat4}}</td>
                                                    <td>{{$qr2->submat4}}</td>
                                                </tr>
                                            </table>
                                            
                                        </li>
                                        @endforeach
                                </ul>
                                @endisset
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        @else
            <p>Belum ada hasil pencarian.</p>
        @endisset

    </div>


    <!-- FORM CARI -->
    <form action="{{route('tambah')}}" id="formCari" method="POST">
    @csrf
        <h2>MAIN</h2>
        <div class="Stat" id="relicMain">
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbhp" name="statInput[]" value="HP" autocomplete="off">
                <label class="btn" for="mbhp">HP</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbatk"  name="statInput[]" value="ATK" autocomplete="off">
                <label class="btn" for="mbatk">ATK</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbdef"  name="statInput[]" value="DEF" autocomplete="off">
                <label class="btn" for="mbdef">DEF</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbhp%"  name="statInput[]" value="HP%" autocomplete="off">
                <label class="btn" for="mbhp%">HP%</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbatk%" n name="statInput[]" value="ATK%" autocomplete="off">
                <label class="btn" for="mbatk%">ATK%</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbdef%" n name="statInput[]" value="DEF%" autocomplete="off">
                <label class="btn" for="mbdef%">DEF%</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbcr" name="statInput[]" value="CR" autocomplete="off">
                <label class="btn" for="mbcr">CR</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbcdm"  name="statInput[]" value="CDM" autocomplete="off">
                <label class="btn" for="mbcdm">CDM</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbehr"  name="statInput[]" value="EHR" autocomplete="off">
                <label class="btn" for="mbehr">EHR</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mber" name="statInput[]" value="ER" autocomplete="off">
                <label class="btn" for="mber">ER</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbbe" name="statInput[]" value="BE" autocomplete="off">
                <label class="btn" for="mbbe">BE</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="mbspd"  name="statInput[]" value="SPD" autocomplete="off">
                <label class="btn" for="mbspd">SPD</label>
            </div>
        </div>
        
        <h2>BAHAN</h2>

        <div class="Stat" id="relicMain">
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1hp" name="statInput1[]" value="HP" autocomplete="off">
                <label class="btn" for="ms1hp">HP</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1atk"  name="statInput1[]" value="ATK" autocomplete="off">
                <label class="btn" for="ms1atk">ATK</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1def"  name="statInput1[]" value="DEF" autocomplete="off">
                <label class="btn" for="ms1def">DEF</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1hp%"  name="statInput1[]" value="HP%" autocomplete="off">
                <label class="btn" for="ms1hp%">HP%</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1atk%" n name="statInput1[]" value="ATK%" autocomplete="off">
                <label class="btn" for="ms1atk%">ATK%</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1def%" n name="statInput1[]" value="DEF%" autocomplete="off">
                <label class="btn" for="ms1def%">DEF%</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1cr" name="statInput1[]" value="CR" autocomplete="off">
                <label class="btn" for="ms1cr">CR</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1cdm"  name="statInput1[]" value="CDM" autocomplete="off">
                <label class="btn" for="ms1cdm">CDM</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1ehr"  name="statInput1[]" value="EHR" autocomplete="off">
                <label class="btn" for="ms1ehr">EHR</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1er" name="statInput1[]" value="ER" autocomplete="off">
                <label class="btn" for="ms1er">ER</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1be" name="statInput1[]" value="BE" autocomplete="off">
                <label class="btn" for="ms1be">BE</label>
            </div>
            <div class="mnStat">
                <input type="checkbox" class="btn-check" id="ms1spd"  name="statInput1[]" value="SPD" autocomplete="off">
                <label class="btn" for="ms1spd">SPD</label>
            </div>
        </div>

        <div class="level">
            <select name="level" id="level">
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="9">9</option>
                <option value="12">12</option>
                <option value="15">15</option>
            </select>
        </div>

        <select name="hasil" id="hasil">
            <option value="HP">HP</option>
            <option value="HP%">HP%</option>
            <option value="ATK">ATK</option>
            <option value="ATK%">ATK%</option>
            <option value="DEF">DEF</option>
            <option value="DEF%">DEF%</option>
            <option value="SPD">SPD</option>
            <option value="CR">CR</option>
            <option value="CDM">CDM</option>
            <option value="BE">BE</option>
            <option value="EHR">EHR</option>
            <option value="ER">ER</option>
        </select>

        <div class="mnStat">
            <input class="btn btn-primary" type="submit" value="INPUT">
        </div>
        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.getElementById("formCari");
        var relicMainCheckboxes = document.querySelectorAll("#relicMain .btn-check");
        var relicBahanCheckboxes = document.querySelectorAll("#relicBahan .btn-check");

        form.addEventListener("submit", function (event) {
            var selectedRelicMain = countSelectedCheckboxes(relicMainCheckboxes);
            var selectedRelicBahan = countSelectedCheckboxes(relicBahanCheckboxes);

            if (selectedRelicMain + selectedRelicBahan > 8) {
                alert("Anda hanya dapat memilih maksimal 8 checkbox!");
                event.preventDefault(); // Mencegah pengiriman formulir jika lebih dari 8 checkbox dipilih
            }
        });

        function countSelectedCheckboxes(checkboxes) {
            var count = 0;
            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    count++;
                }
            });
            return count;
        }
        
    });
</script>


</body>
</html>