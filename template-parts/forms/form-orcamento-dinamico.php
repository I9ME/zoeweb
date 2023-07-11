<style>
 #_form_1_ ._form-thank-you { position:relative; left:0; right:0; text-align:center; font-size:18px; }
 @media all and (min-width:320px) and (max-width:667px) { #_form_1_._inline-form._inline-style ._inline-style._button-wrapper { margin-top:20px !important; margin-left:0 !important; }
 }

</style>

<form method="POST" action="https://zoeweb.activehosted.com/proc.php" id="_form_1_" class="Form Form--style1 u-positionRelative u-size14of24 u-alignCenterBox u-paddingHorizontal--vrt _form _form_1 _inline-form  _dark " novalidate>
  <input type="hidden" name="u" value="1" />
  <input type="hidden" name="f" value="1" />
  <input type="hidden" name="s" />
  <input type="hidden" name="c" value="0" />
  <input type="hidden" name="m" value="0" />
  <input type="hidden" name="act" value="sub" />
  <input type="hidden" name="v" value="2" />
  <fieldset class="">
    <div class="_form-content">
      <div class="_form_element _x34921875 u-sizeFull u-marginBottom--inter" >
        <label class="_form-label">
          Nome*
        </label>
        <div class="_field-wrapper">
          <input type="text" name="fullname" class="u-sizeFull" placeholder="" />
        </div>
      </div>
      <div class="_form_element _x71437658 _full_width u-sizeFull u-marginBottom--inter" >
        <label class="_form-label">
          E-mail*
        </label>
        <div class="_field-wrapper">
          <input type="text" name="email" class="u-sizeFull" placeholder="" required/>
        </div>
      </div>
      <div class="_form_element _x81063115 _full_width u-sizeFull u-marginBottom--inter" >
        <label class="_form-label">
          Telefone*
        </label>
        <div class="_field-wrapper">
          <input type="text" name="phone" class="u-sizeFull" placeholder="" />
        </div>
      </div>
      <div class="_form_element _field1 _full_width u-sizeFull u-marginBottom--inter" >
        <label class="_form-label">
          Cargo*
        </label>
        <div class="_field-wrapper">
          <input type="text" name="field[1]" class="u-sizeFull" value="" placeholder="" />
        </div>
      </div>
      <div class="_form_element _field2 _full_width u-sizeFull u-marginBottom--inter" >
        <label class="_form-label">
          Empresa
        </label>
        <div class="_field-wrapper">
          <input type="text" name="field[2]" class="u-sizeFull" value="" placeholder="" />
        </div>
      </div>
      
      <div class="Block Block--servicos u-sizeFull">
        <?php if ( is_page('orcamentos') ) { ?>
        <div class="u-marginBottom--inter">
          <label class="_form-label">
            <strong>Quais serviços tem interesse?*</strong>
          </label>
        </div>
        <?php } ?>
        <input type="hidden" name="field[3][]" value="~|">

        <?php if ( is_page('orcamentos') ) { ?>
          <!----
            Página Orçamentos
            ------>
            <div class="_row _checkbox-radio u-sizeFull">
              <input id="field_3Transmissão de evento" type="checkbox" name="field[3][]" value="Transmissão de evento">
              <span>
                <label for="field_3Transmissão de evento">
                  Transmissão de evento
                </label>
              </span>
            </div>
            <div class="_row _checkbox-radio u-sizeFull">
              <input id="field_3TV Online" type="checkbox" name="field[3][]" value="TV Online"   >
              <span>
                <label for="field_3TV Online">
                  TV Online
                </label>
              </span>
            </div>
            <div class="_row _checkbox-radio u-sizeFull">
              <input id="field_3Tv Corporativa" type="checkbox" name="field[3][]" value="Tv Corporativa"   >
              <span>
                <label for="field_3Tv Corporativa">
                  Tv Corporativa
                </label>
              </span>
            </div>
            <div class="_row _checkbox-radio u-sizeFull">
              <input id="field_3Rádio Online" type="checkbox" name="field[3][]" value="Rádio Online"   >
              <span>
                <label for="field_3Rádio Online">
                  Rádio Online
                </label>
              </span>
            </div>
            <div class="_row _checkbox-radio u-sizeFull">
              <input id="field_3Ensino a Distância" type="checkbox" name="field[3][]" value="Ensino a Distância"   >
              <span>
                <label for="field_3Ensino a Distância">
                  Ensino a Distância
                </label>
              </span>
            </div>
            <div class="_row _checkbox-radio u-sizeFull">
              <input id="field_3Câmera IP" type="checkbox" name="field[3][]" value="Câmera IP"   >
              <span>
                <label for="field_3Câmera IP">
                  Câmera IP
                </label>
              </span>
            </div>
            <div class="_row _checkbox-radio u-sizeFull">
              <input id="field_3Tv Ondemand" type="checkbox" name="field[3][]" value="Tv Ondemand"   >
              <span>
                <label for="field_3Tv Ondemand">
                  Tv Ondemand
                </label>
              </span>
            </div>
        
        <!-------
          Sub páginas de orçamento
          -------->
        <?php } elseif ( is_page('transmissao-de-evento') ) { ?>

           <div class="_row _checkbox-radio u-isHidden--orcamento">
              <input id="field_3Transmissão de evento" type="checkbox" name="field[3][]" checked="checked" value="Transmissão de evento"   >
              <span>
                <label for="field_3Transmissão de evento">
                  Transmissão de evento
                </label>
              </span>
            </div>

          <?php } elseif ( is_page('tv-online') ) { ?>

          <div class="_row _checkbox-radio u-isHidden--orcamento">
            <input id="field_3TV Online" type="checkbox" name="field[3][]" checked="checked" value="TV Online"   >
            <span>
              <label for="field_3TV Online">
                TV Online
              </label>
            </span>
          </div>

          <?php } elseif ( is_page('tv-corporativa') ) { ?>

          <div class="_row _checkbox-radio u-isHidden--orcamento">
            <input id="field_3Tv Corporativa" type="checkbox" name="field[3][]" checked="checked" value="Tv Corporativa"   >
            <span>
              <label for="field_3Tv Corporativa">
                Tv Corporativa
              </label>
            </span>
          </div>

          <?php } elseif ( is_page('radio-online') ) { ?>

          <div class="_row _checkbox-radio u-isHidden--orcamento">
        <input id="field_3Rádio Online" type="checkbox" name="field[3][]" checked="checked" value="Rádio Online"   >
        <span>
          <label for="field_3Rádio Online">
            Rádio Online
          </label>
        </span>
      </div>

          <?php } elseif ( is_page('ensino-a-distancia') ) { ?>

          <div class="_row _checkbox-radio u-isHidden--orcamento">
            <input id="field_3Ensino a Distância" type="checkbox" name="field[3][]" checked="checked" value="Ensino a Distância"   >
            <span>
              <label for="field_3Ensino a Distância">
                Ensino a Distância
              </label>
            </span>
          </div>

          <?php } elseif ( is_page('cameras-ip') ) { ?>

          <div class="_row _checkbox-radio u-isHidden--orcamento">
            <input id="field_3Câmera IP" type="checkbox" name="field[3][]" checked="checked" value="Câmera IP"   >
            <span>
              <label for="field_3Câmera IP">
                Câmera IP
              </label>
            </span>
          </div>

          <?php } elseif ( is_page('tv-ondemand') ) { ?>

            <div class="_row _checkbox-radio u-isHidden--orcamento">
              <input id="field_3Tv Ondemand" type="checkbox" name="field[3][]" checked="checked" value="Tv Ondemand"   >
              <span>
                <label for="field_3Tv Ondemand">
                  Tv Ondemand
                </label>
              </span>
            </div>

            <?php } ?>

           <div class="_form_element _field4 _full_width u-sizeFull u-marginTop--inter" >
            <label class="_form-label">
              <strong>Possui equipamentos e internet no local?</strong>
            </label>
            <div class="_field-wrapper u-marginTop--inter">
              <select name="field[4]"  class="u-sizeFull u-marginBottom--inter">
                <option value="Sim, equipamentos e internet" >
                  Sim, equipamentos e internet
                </option>
                <option value="Somente equipamentos de captura" >
                  Somente equipamentos de captura
                </option>
                <option value="Somente internet no local" >
                  Somente internet no local
                </option>
                <option value="Não possuo nenhum dos dois" >
                  Não possuo nenhum dos dois
                </option>
              </select>
            </div>
          </div>

          <div class="_form_element _field5 _full_width u-sizeFull" >
            <label class="_form-label">
              <strong>Duração da Transmissão</strong>
            </label>
            <div class="_field-wrapper u-marginTop--inter">
              <select name="field[5]"  class="u-sizeFull u-marginBottom--inter">
                <option value="Até 2h" >
                  Até 2h
                </option>
                <option value="De 2h a 4h" >
                  De 2h a 4h
                </option>
                <option value="De 4h a 8h" >
                  De 4h a 8h
                </option>
                <option value="Mais de 8h" >
                  Mais de 8h
                </option>
                <option value="Desejo contratar mensalmente" >
                  Desejo contratar mensalmente
                </option>
              </select>
            </div>
          </div>
          <div class="_form_element _field6 _full_width u-sizeFull" >
            <label class="_form-label">
              <strong>Previsão da quantidade de usuários simultâneos</strong>
            </label>
            <div class="_field-wrapper u-marginTop--inter">
              <select name="field[6]"  class="u-sizeFull u-marginBottom--inter">
                <option value="0 - 150" >
                  0 - 150
                </option>
                <option value="150 - 350" >
                  150 - 350
                </option>
                <option value="350 - 500" >
                  350 - 500
                </option>
                <option value="500 - 1000" >
                  500 - 1000
                </option>
                <option value="Acima de 1000" >
                  Acima de 1000
                </option>
              </select>
            </div>
          </div>
           <div class="_button-wrapper _full_width u-sizeFull">
            <button id="_form_1_submit" class="_submit u-sizeFull Button Button--submit Button--border is-animating" type="submit">
              SOLICITAR ORÇAMENTO
            </button>
          </div>
          <div class="_clear-element"></div>

      </div> <!-- .block -->
    </div>
    <div class="_form-thank-you u-sizeFull" style="display:none;">
      
    </div>

</fieldset>
</form>

<script type="text/javascript">
window.cfields = {"1":"cargo","2":"empresa","3":"quais_servios_tem_interesse","4":"possui_equipamentos_e_internet_no_local","5":"durao_da_transmisso","6":"previso_da_quantidade_de_usurios_simultneos"};
window._show_thank_you = function(id, message, trackcmp_url) {
  var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';
  if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }
  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};
window._show_error = function(id, message, html) {
  var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};
window._load_script = function(url, callback) {
    var head = document.querySelector('head'), script = document.createElement('script'), r = false;
    script.type = 'text/javascript';
    script.charset = 'utf-8';
    script.src = url;
    if (callback) {
      script.onload = script.onreadystatechange = function() {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
        }
      };
    }
    head.appendChild(script);
};
(function() {
  if (window.location.search.search("excludeform") !== -1) return false;
  var getCookie = function(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }
  var setCookie = function(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
  }
      var addEvent = function(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];
      element['on' + event] = function() {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  }
  var _removed = false;
  var form_to_submit = document.getElementById('_form_1_');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

  var getUrlParam = function(name) {
    var regexStr = '[\?&]' + name + '=([^&#]*)';
    var results = new RegExp(regexStr, 'i').exec(window.location.href);
    return results != undefined ? decodeURIComponent(results[1]) : false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);
    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }
    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }
      tooltips = [];
  };
  var remove_tooltip = function(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };
  var create_tooltip = function(elem, text) {
    var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }
    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };
  var resize_tooltip = function(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };
  var resize_tooltips = function() {
    if (_removed) return;
    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };
  var validate_field = function(elem, remove) {
    var tooltip = null, value = elem.value, no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
        var elems = form_to_submit.elements[elem.name];
        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        }
        else {
          no_error = false;
          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
        }
      } else if (elem.type =='checkbox') {
        var elems = form_to_submit.elements[elem.name], found = false, err = [];
        no_error = true;
        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Marcar %s é necessário".replace("%s", elems[i].value));
          }
        }
        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;
        if (elem.multiple) {
          selected = false;
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && !elem.options[i].value) {
              selected = false;
            }
          }
        }
        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Por favor, selecione uma opção.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Este campo é necessário.");
      }
    }
    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Digite um e-mail válido");
      }
    }
    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Digite uma data válida.");
      }
    }
    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };
  var needs_validate = function(el) {
    return el.name == 'email' || el.getAttribute('required') !== null;
  };
  var validate_form = function(e) {
    var err = form_to_submit.querySelector('._form_error'), no_error = true;
    if (!submitted) {
      submitted = true;
      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];
        if (needs_validate(input)) {
          if (input.type == 'text') {
            addEvent(input, 'blur', function() {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function() {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function(el) {
              var radios = form_to_submit.elements[el.name];
              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function() {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function() {
              validate_field(this, true);
            });
          }
        }
      }
    }
    remove_tooltips();
    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];
      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }
        validate_field(elem) ? true : no_error = false;
      }
    }
    if (!no_error && e) {
      e.preventDefault();
    }
    resize_tooltips();
    return no_error;
  };
  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);
  window._old_serialize = null;
  if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
  _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
    window._form_serialize = window.serialize;
    if (window._old_serialize) window.serialize = window._old_serialize;
  });
  var form_submit = function(e) {
    e.preventDefault();
    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('[id^="_form"][id$="_submit"]').disabled = true;
            var serialized = _form_serialize(document.getElementById('_form_1_'));
      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;
      _load_script('https://zoeweb.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }
    return false;
  };
  addEvent(form_to_submit, 'submit', form_submit);
})();

</script>