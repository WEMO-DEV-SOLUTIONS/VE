@extends('gestion_participants.layout_admin_p')

@section('content')

	
		<!-- begin page-header -->
		
     <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">

                  @include('partials.error')

                    <center>
                    <div class="col-lg-12">
                        <div class="quotes" >
                       
                                <div class="title-2" class="card-header" style="margin-top:-2px; margin-left: 200px; margin-right: -300px; background-color: grey; height: 56px;
                                font-color:white">
                                        <center><h2 class="title-single"  style="color:white">Enregistrez un participant à la cérémonie de consécration</h3></center>
                            </div>

                            <form  class="card-header" style="margin-top:5%; background-color: white; margin-left: 200px; margin-right: -300px " method="post" action="{{route('inscriptionConsecration')}}" >
                              @csrf
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nom</label>
                                        <input type="text" class="form-control" name="nom" placeholder="votre nom">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Prénom</label>
                                        <input type="tect" class="form-control" name="prenom" placeholder="votre prénom">
                                      </div>
                                    </div>

                                    <div class="form-row">
                                            <div class="col">
                                                    <label for="inputState"> Indicatif</label>
                                                    <select name="indicatif" class="form-control">
                                                    <option><span>India</span><span>+91</span></option>
      <option><span>United States</span><span>+1</span></option>
      <option><span>Afghanistan</span><span>+93</span></option> 
      <option><span>Albania</span><span>+355</span> </option>
      <option><span>Algeria</span><span>+213</span> </option>
      <option><span>American Samoa</span><span>+1684</span> </option>
      <option><span>Andorra</span><span>+376</span> </option>
      <option><span>Angola</span><span>+244</span> </option>
      <option><span>Anguilla</span><span>+1264</span></option>
      <option><span>Antigua and Barbuda</span><span>+1268</span></option>
      <option><span>Argentina</span><span>+54</span></option>
      <option><span>Armenia</span><span>+374</span></option>
      <option><span>Aruba</span><span>+297</span></option>
      <option><span>Ascension Island</span><span>+247</span>
      <option><span>Australia</span><span>+61</span></option>
      <option><span>Austria</span><span>+43</span></option>
      <option><span>Azerbaijan</span><span>+994</span></option>
      <option><span>Bahamas</span><span>+1242</span></option>
      <option><span>Bahrain</span><span>+973</span></option>
      <option><span>Bangladesh</span><span>+880</span></option>
      <option><span>Barbados</span><span>+1246</span></option>
      <option><span>Belarus</span><span>+375</span></option>
      <option><span>Belgium</span><span>+32</span></option>
      <option><span>Belize</span><span>+501</span>
      <option><span>Benin</span><span>+229</span>
      <option><span>Bermuda</span><span>+1441</span>
      <option><span>Bhutan</span><span>+975</span>
      <option><span>Bolivia</span><span>+591</span>
      <option><span>Bonaire, Sint Eustatius</span><span>+599</span>
      <option><span>Bosnia and Herzegovina</span><span>+387</span>
      <option><span>Botswana</span><span>+267</span>
      <option><span>Brazil</span><span>+55</span>
      <option><span>Brunei</span><span>+673</span>
      <option><span>Bulgaria</span><span>+359</span>
      <option><span>Burkina Faso</span><span>+226</span>
      <option><span>Burundi</span><span>+257</span>
      <option><span>Cambodia</span><span>+855</span>
      <option><span>Cameroon</span><span>+237</span>
      <option><span>Canada</span><span>+1</span>
      <option><span>Cape Verde</span><span>+238</span>
      <option><span>Cayman Islands</span><span>+1345</span>
      <option><span>Central African Republic</span><span>+236</span>
      <option><span>Chad</span><span>+235</span>
      <option><span>Chile</span><span>+56</span>
      <option><span>China</span><span>+86</span>
      <option><span>Colombia</span><span>+57</span>
      <option><span>Comoros and Mayotte</span><span>+269</span>
      <option><span>Congo</span><span>+242</span>
      <option><span>Congo Dem Rep</span><span>+243</span>
      <option><span>Cook Islands</span><span>+682</span>
      <option><span>Costa Rica</span><span>+506</span>
      <option><span>Cote d'Ivoire</span><span>+225</span>
      <option><span>Croatia</span><span>+385</span>
      <option><span>Cuba</span><span>+53</span>
      <option><span>Curaçao</span><span>+599</span>
      <option><span>Cyprus</span><span>+357</span>
      <option><span>Czech Republic</span><span>+420</span>
      <option><span>Denmark</span><span>+45</span>
      <option><span>Diego Garcia</span><span>+246</span>
      <option><span>Djibouti</span><span>+253</span>
      <option><span>Dominica</span><span>+1767</span>
      <option><span>Dominican Republic</span><span>+1809</span>
      <option><span>Ecuador</span><span>+593</span>
      <option><span>Egypt</span><span>+20</span>
      <option><span>El Salvador</span><span>+503</span>
      <option><span>Equatorial Guinea</span><span>+240</span>
      <option><span>Eritrea</span><span>+291</span>
      <option><span>Estonia</span><span>+372</span>
      <option><span>Ethiopia</span><span>+251</span>
      <option><span>Falkland Islands</span><span>+500</span>
      <option><span>Faroe Islands</span><span>+298</span>
      <option><span>Fiji</span><span>+679</span>
      <option><span>Finland</span><span>+358</span>
      <option><span>France</span><span>+33</span>
      <option><span>French Guiana</span><span>+594</span>
      <option><span>French Polynesia</span><span>+689</span>
      <option><span>Gabon</span><span>+241</span>
      <option><span>Gambia</span><span>+220</span>
      <option><span>Georgia</span><span>+995</span>
      <option><span>Germany</span><span>+49</span>
      <option><span>Ghana</span><span>+233</span>
      <option><span>Gibraltar</span><span>+350</span>
      <option><span>Greece</span><span>+30</span>
      <option><span>Greenland</span><span>+299</span>
      <option><span>Grenada</span><span>+1473</span>
      <option><span>Guadeloupe</span><span>+590</span>
      <option><span>Guam</span><span>+1671</span>
      <option><span>Guatemala</span><span>+502</span>
      <option><span>Guinea</span><span>+224</span>
      <option><span>Guinea Bissau</span><span>+245</span>
      <option><span>Guyana</span><span>+592</span>
      <option><span>Haiti</span><span>+509</span>
      <option><span>Honduras</span><span>+504</span>
      <option><span>Hong Kong</span><span>+852</span>
      <option><span>Hungary</span><span>+36</span>
      <option><span>Iceland</span><span>+354</span>
      <option><span>India</span><span>+91</span>
      <option><span>Indonesia</span><span>+62</span>
      <option><span>Iran</span><span>+98</span>
      <option><span>Iraq</span><span>+964</span>
      <option><span>Ireland</span><span>+353</span>
      <option><span>Israel</span><span>+972</span>
      <option><span>Italy</span><span>+39</span>
      <option><span>Jamaica</span><span>+1876</span>
      <option><span>Japan</span><span>+81</span>
      <option><span>Jordan</span><span>+962</span>
      <option><span>Kazakhstan</span><span>+7</span>
      <option><span>Kenya</span><span>+254</span>
      <option><span>Kiribati</span><span>+686</span>
      <option><span>Korea, North</span><span>+850</span>
      <option><span>Korea, South</span><span>+82</span>
      <option><span>Kuwait</span><span>+965</span>
      <option><span>Kyrgyzstan</span><span>+996</span>
      <option><span>Laos</span><span>+856</span>
      <option><span>Latvia</span><span>+371</span>
      <option><span>Lebanon</span><span>+961</span>
      <option><span>Lesotho</span><span>+266</span>
      <option><span>Liberia</span><span>+231</span>
      <option><span>Libya</span><span>+218</span>
      <option><span>Liechtenstein</span><span>+423</span>
      <option><span>Lithuania</span><span>+370</span>
      <option><span>Luxembourg</span><span>+352</span>
      <option><span>Macao</span><span>+853</span>
      <option><span>Macedonia</span><span>+389</span>
      <option><span>Madagascar</span><span>+261</span>
      <option><span>Malawi</span><span>+265</span>
      <option><span>Malaysia</span><span>+60</span>
      <option><span>Maldives</span><span>+960</span>
      <option><span>Mali</span><span>+223</span>
      <option><span>Malta</span><span>+356</span>
      <option><span>Marshall Islands</span><span>+692</span>
      <option><span>Martinique</span><span>+596</span>
    
      <option><span>Mexico</span><span>+52</span>
      <option><span>Micronesia</span><span>+691</span>
      <option><span>Moldova</span><span>+373</span>
      <option><span>Monaco</span><span>+377</span>
      <option><span>Mongolia</span><span>+976</span>
      <option><span>Montenegro</span><span>+382</span>
      <option><span>Montserrat</span><span>+1664</span>
      <option><span>Morocco</span><span>+212</span>
      <option><span>Mozambique</span><span>+258</span>
      <option><span>Myanmar</span><span>+95</span>
      <option><span>Namibia</span><span>+264</span>
      <option><span>Nauru</span><span>+674</span>
      <option><span>Nepal</span><span>+977</span>
      <option><span>Netherlands</span><span>+31</span>
      <option><span>New Caledonia</span><span>+687</span>
      <option><span>New Zealand</span><span>+64</span>
      <option><span>Nicaragua</span><span>+505</span>
      <option><span>Niger</span><span>+227</span>
      <option><span>Nigeria</span><span>+234</span>
      <option><span>Niue</span><span>+683</span>
      <option><span>Norfolk Island</span><span>+6723</span>
      <option><span>Northern Mariana Islands</span><span>+1</span>
      <option><span>Norway</span><span>+47</span>
      <option><span>Oman</span><span>+968</span>
      <option><span>Pakistan</span><span>+92</span>
      <option><span>Palau</span><span>+680</span>
      <option><span>Palestinian Territories</span><span>+970</span></option>
      <option><span>Panama</span><span>+507</span></option>
      <option><span>Papua New Guinea</span><span>+63</span></option>
      <option><span>Paraguay</span><span>+595</span></option>
      <option><span>Peru</span><span>+51</span></option>
      <option><span>Philippines</span><span>+63</span></option>
      <option><span>Poland</span><span>+48</span></option>
      <option><span>Portugal</span><span>+351</span></option>
      <option><span>Puerto Rico</span><span>+1787</span></option>
      <option><span>Qatar</span><span>+974</span></option>
      <option><span>Reunion</span><span>+262</span></option>
      <option><span>Romania</span><span>+40</span></option>
      <option><span>Russia</span><span>+7</span></option>
      <option><span>Rwanda</span><span>+250</span></option>
      <option><span>Saba</span><span>+599</span></option>
      <option><span>Saint Barthélemy</span><span>+590</span></option>
      <option><span>Saint Helena</span><span>+290</span></option>
      <option><span>Saint Kitts and Nevis</span><span>+1869</span></option>
      <option><span>Saint Lucia</span><span>+1758</span></option>
      <option><span>Saint Martin</span><span>+590</span></option>
      <option><span>Saint Pierre and Miquelon</span><span>+508</span></option>
      <option><span>Saint Vincent Grenadines</span><span>+1784</span></option>
      <option><span>Samoa</span><span>+685</span></option>
      <option><span>San Marino</span><span>+378</span></option>
      <option><span>Sao Tome and Principe</span><span>+239</span></option>
      <option><span>Saudi Arabia</span><span>+966</span></option>
      <option><span>Senegal</span><span>+221</span></option>
      <option><span>Serbia</span><span>+381</span></option>
      <option><span>Seychelles</span><span>+248</span></option>
      <option><span>Sierra Leone</span><span>+232</span></option>
      <option><span>Singapore</span><span>+65</span></option>
      <option><span>Sint Maarten</span><span>+1721</span></option>
      <option><span>Slovakia</span><span>+421</span></option>
      <option><span>Slovenia</span><span>+386</span></option>
      <option><span>Solomon Islands</span><span>+677</span></option>
      <option><span>Somalia</span><span>+252</span></option>
      <option><span>South Africa</span><span>+27</span></option>
      <option><span>South Sudan</span><span>+211</span></option>
      <option><span>Spain</span><span>+34</span></option>
      <option><span>Sri Lanka</span><span>+94</span></option>
      <option><span>Sudan</span><span>+249</span></option>
      <option><span>Suriname</span><span>+597</span></option>
      <option><span>Swaziland</span><span>+268</span></option>
      <option><span>Sweden</span><span>+46</span></option>
      <option><span>Switzerland</span><span>+41</span></option>
      <option><span>Syria</span><span>+963</span></option>
      <option><span>Taiwan</span><span>+886</span></option>
      <option><span>Tajikistan</span><span>+992</span></option>
      <option><span>Tanzania</span><span>+255</span></option>
      <option><span>Thailand</span><span>+66</span></option>
      <option><span>Timor-Leste</span><span>+670</span></option>
      <option><span>Togo</span><span>+228</span></option>
      <option><span>Tokelau</span><span>+690</span></option>
      <option><span>Tonga</span><span>+676</span></option>
      <option><span>Trinidad and Tobago</span><span>+1868</span></option>
      <option><span>Tunisia</span><span>+216</span></option>
      <option><span>Turkey</span><span>+90</span></option>
      <option><span>Turkmenistan</span><span>+993</span></option>
      <option><span>Turks and Caicos</span><span>+1649</span></option>
      <option><span>Tuvalu</span><span>+688</span></option>
      <option><span>Uganda</span><span>+256</span></option>
      <option><span>Ukraine</span><span>+380</span></option>
      <option><span>United Arab Emirates</span><span>+971</span></option>
      <option><span>United Kingdom</span><span>+44</span></option>
      <option><span>United States</span><span>+1</span></option>
      <option><span>Uruguay</span><span>+598</span></option>
      <option><span>Uzbekistan</span><span>+998</span></option>
      <option><span>Vanuatu</span><span>+678</span></option>
      <option><span>Vatican City</span><span>+379</span></option>
      <option><span>Venezuela</span><span>+58</span></option>
      <option><span>Vietnam</span><span>+84</span></option>
      <option><span>Virgin Islands, British</span><span>+1284</span></option>
      <option><span>Virgin Islands, US</span><span>+1340</span></option>
      <option><span>Wallis and Futuna</span><span>+681</span></option>
      <option><span>Yemen</span><span>+967</span></option>
      <option><span>Zambia</span><span>+260</span></option>
      <option><span>Zimbabwe</span><span>+263</span></option>
                                                    </select>
                                                  </div>
                                            <div class="col">
                                                    <label for="inputState">Numero de telephone</label>
                                              <input type="text" class="form-control" placeholder="votre numero de telephone" name="phone">
                                            </div>
                                          </div>

                                <div class="form-row">


                                    <div class="col">
                                        <label for="inputZip">Pays</label>
                                        <input type="text" class="form-control" name="pays" placeholder="votre pays">
                                    </div>
                                    <div class="col">
                                        <label for="inputZip">ville</label>
                                        <input type="text" class="form-control" name="city" placeholder="votre ville">
                                    </div>


                                </div>

                                <div class="form-row">

                                  <div class="col">
                                          <label for="inputZip">Profession</label>
                                          <input type="text" class="form-control" name="profession" placeholder="votre profession">
                                  </div>
                                  <div class="col">
                                        <label for="">Choisissez  une categorie </label>
                                        <select name="categorie" class="form-control">
                                            <option selected>Choisir ...</option>
                                            <option value="Jeune consacrées à l'Eternel" data-toggle="tooltip" data-placement="top" title="Le groupe Jeunes consacrés à l’Éternel, rassemble des jeunes gens et jeunes filles de toutes communautés et nations, qui entendent l'appel de l’Éternel et veulent se consacrer à lui,
                                               en vue de bâtir ensemble la nation éthique, par leurs valeurs morales et leur créativité, et contribuer ainsi à la paix et au progrès pour tous.">
                                                Jeune consacrées à l'Eternel</option>

                                            <option value="Serviteurs de Dieu pour des Nations consacrées" data-toggle="tooltip" data-placement="top" title="Le groupe » serviteurs de Dieu consacrés «  réunit des hommes et des femmes de toutes les nationalités, déjà consacrés au service de Dieu, qui veulent travailler ensemble pour préparer la consécration du Cameroun  et de toutes les nations
                                               à l’Éternel, comme nations éthiques. ">
                                                Serviteurs de Dieu pour des Nations consacrées</option>

                                            <option value="Familles consacrées à l'Eterne" data-toggle="tooltip" data-placement="top" title=" Familles consacrées
                                              Le groupe  « familles consacrées »rassemble des hommes, des femmes, des jeunes, qui veulent
                                               participer au plan de l’Eternel  visant à bâtir des nations éthiques, à travers la consécration de leurs  familles à son nom. Ils vont travailler à rendre celles-ci  capables de manifester avec l’aide de Dieu les valeurs morales  et affectives favorisant  l’amour, la paix et  le progrès.
                                              ">
                                                Familles consacrées à l'Eternel</option>

                                            <option value="Leaders consacrés à l'Eternel" data-toggle="tooltip" data-placement="top" title="Le groupe Leaders consacrés à l’Éternel, rassemble des hommes et des femmes de toutes les nations, des leaders au sein de divers types  de communautés (culturelles, sociologiques, professionnelles,...) qui veulent bâtir la nation éthique avec l’Éternel, dans leurs différents milieux d’appartenance, leur pays, au-delà.">
                                                Leaders consacrés à l'Eternel</option>

                                            <option value="Décennie d'impact spirituel des femmes" data-toggle="tooltip" data-placement="top" title="La Décennie d’impact spirituel des femmes est un mouvement constitué de femmes de toutes communautés et nations, qui s’engagent à servir Dieu au cours de la décennie, pour engendrer la nation éthique dans leurs familles et dans toutes leurs communautés
                                              d’appartenance sociale, par leurs valeurs morales et leur comportement.">
                                                Décennie d'impact spirituel des femmes </option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="inputZip">Votre Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="votre Email">
                                    </div>
                                </div>
            <div class="form-row" >
                                <div class="form-group col-md-6">
                               </div>
                                <div class="form-group col-md-4">


                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md btn-block" style="background-color: grey;">Valider </button>
                                  </form>
                                  <br>

                        </div>


                   
            </div>



        </div>
    </div>
</section>
		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
		
	</div>
	<!-- end page container -->

	@endsection
	
	

