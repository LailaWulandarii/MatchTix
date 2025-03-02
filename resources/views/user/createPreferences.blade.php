@extends('user.main')
@section('title', 'Data Diri')
@section('content')
    <section class="hero section">
        <div class="container">
            <div class="row gy-4 d-flex justify-content-center">
                {{-- <div class=" col-lg-4 mt-3"><span>isi data dirimu</span></div> --}}
                <div class=" col-lg-4 mt-4 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <h5 class="card-title text-center pt-2 ">Isi data dirimu dulu ya!</h5>
                        <img src="{{ asset('img/write.png') }}" class="img-fluid animated" alt="">
                    </div>
                </div>
                <div class="card col-lg-8 mt-4">
                    <div class="card-body">
                        <!-- Step 1 -->
                        <form id="step1" class="row g-3">
                            <div class="col-12">
                                <label class="col-form-label">Jenis Kelamin</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input name="gender" class="form-check-input" type="radio" value="male"
                                                id="male" />
                                            <label class="form-check-label" for="male">Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input name="gender" class="form-check-input" type="radio" value="female"
                                                id="female" />
                                            <label class="form-check-label" for="female">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <label for="birthdate" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                                </div>
                                <div class="col-6">
                                    <label for="age" class="form-label">Umur</label>
                                    <input type="number" class="form-control" id="age" name="age">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <label for="height" class="form-label">Tinggi Badan</label>
                                    <div class="d-flex align-items-center">
                                        <input type="number" class="form-control pr-4" id="height" name="height">
                                        <span class="ml-2">cm</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="weight" class="form-label">Berat Badan</label>
                                    <div class="d-flex align-items-center">
                                        <input type="number" class="form-control pr-4" id="weight" name="weight">
                                        <span class="ml-2">kg</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2">
                                <label class="col-form-label">Love Language</label>
                                <div class="row ">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="love_language" class="form-check-input" type="radio"
                                                value="Acts of Service" id="acts_of_service" />
                                            <label class="form-check-label" for="acts_of_service">Acts of Service</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="love_language" class="form-check-input" type="radio"
                                                value="Receiving Gifts" id="receiving_gifts" />
                                            <label class="form-check-label" for="receiving_gifts">Receiving Gifts</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="love_language" class="form-check-input" type="radio"
                                                value="Physical Touch" id="physical_touch" />
                                            <label class="form-check-label" for="physical_touch">Physical Touch</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="love_language" class="form-check-input" type="radio"
                                                value="Quality Time" id="quality_time" />
                                            <label class="form-check-label" for="quality_time">Quality Time</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="love_language" class="form-check-input" type="radio"
                                                value="Words of Affirmation" id="words_of_affirmation" />
                                            <label class="form-check-label" for="words_of_affirmation">Words of
                                                Affirmation</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-0">
                                <label class="col-form-label">Gaya Komunikasi</label>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="communication_style" class="form-check-input" type="radio"
                                                value="talker" id="talker" />
                                            <label class="form-check-label" for="talker">Talker</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="communication_style" class="form-check-input" type="radio"
                                                value="listener" id="listener" />
                                            <label class="form-check-label" for="listener">Listener</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-check">
                                            <input name="communication_style" class="form-check-input" type="radio"
                                                value="balanced" id="balanced" />
                                            <label class="form-check-label" for="balanced">Balanced</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" onclick="nextStep()">Next</button>
                            </div>
                        </form>

                        <!-- Step 2 -->
                        <form id="step2" class="row g-3 d-none">
                            <div class="col-12 mt-2">
                                <label class="col-form-label">Genre Musik</label>
                                <div class="row">
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Pop" id="pop" />
                                            <label class="form-check-label" for="pop">Pop</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Rock" id="rock" />
                                            <label class="form-check-label" for="rock">Rock</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Jazz" id="jazz" />
                                            <label class="form-check-label" for="jazz">Jazz</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Classical" id="classical" />
                                            <label class="form-check-label" for="classical">Classical</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Hip-hop" id="hip_hop" />
                                            <label class="form-check-label" for="hip_hop">Hip-hop</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Electronic" id="electronic" />
                                            <label class="form-check-label" for="electronic">Electronic</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Country" id="country" />
                                            <label class="form-check-label" for="country">Country</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Reggae" id="reggae" />
                                            <label class="form-check-label" for="reggae">Reggae</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Blues" id="blues" />
                                            <label class="form-check-label" for="blues">Blues</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Folk" id="folk" />
                                            <label class="form-check-label" for="folk">Folk</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="Metal" id="metal" />
                                            <label class="form-check-label" for="metal">Metal</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="music_genre" class="form-check-input" type="radio"
                                                value="R&B" id="rnb" />
                                            <label class="form-check-label" for="rnb">R&B</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <label class="col-form-label">Genre Film</label>
                                <div class="row">
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Action" id="action" />
                                            <label class="form-check-label" for="action">Action</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Comedy" id="comedy" />
                                            <label class="form-check-label" for="comedy">Comedy</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Drama" id="drama" />
                                            <label class="form-check-label" for="drama">Drama</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Horror" id="horror" />
                                            <label class="form-check-label" for="horror">Horror</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Sci-Fi" id="sci_fi" />
                                            <label class="form-check-label" for="sci_fi">Sci-Fi</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Romance" id="romance" />
                                            <label class="form-check-label" for="romance">Romance</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Documentary" id="documentary" />
                                            <label class="form-check-label" for="documentary">Documentary</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Thriller" id="thriller" />
                                            <label class="form-check-label" for="thriller">Thriller</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Animation" id="animation" />
                                            <label class="form-check-label" for="animation">Animation</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Fantasy" id="fantasy" />
                                            <label class="form-check-label" for="fantasy">Fantasy</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Mystery" id="mystery" />
                                            <label class="form-check-label" for="mystery">Mystery</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="movie_genre" class="form-check-input" type="radio"
                                                value="Musical" id="musical" />
                                            <label class="form-check-label" for="musical">Musical</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <label class="col-form-label">Olahraga</label>
                                <div class="row">
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio"
                                                value="Football" id="football" />
                                            <label class="form-check-label" for="football">Football</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio"
                                                value="Basketball" id="basketball" />
                                            <label class="form-check-label" for="basketball">Baketball</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio"
                                                value="Swimming" id="swimming" />
                                            <label class="form-check-label" for="swimming">Swimming</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio"
                                                value="Running" id="running" />
                                            <label class="form-check-label" for="running">Running</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio" value="Tennis"
                                                id="tennis" />
                                            <label class="form-check-label" for="tennis">Tennis</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio"
                                                value="Badminton" id="badminton" />
                                            <label class="form-check-label" for="badminton">Badminton</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio"
                                                value="Cycling" id="cycling" />
                                            <label class="form-check-label" for="cycling">Clycling</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio" value="Yoga"
                                                id="yoga" />
                                            <label class="form-check-label" for="yoga">Yoga</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio" value="Golf"
                                                id="golf" />
                                            <label class="form-check-label" for="golf">Golf</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="sports" class="form-check-input" type="radio"
                                                value="Volleyball" id="volleyball" />
                                            <label class="form-check-label" for="volleyball">Volleyball</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <label class="col-form-label">Pekerjaan</label>
                                <div class="row">
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio"
                                                value="Student" id="student" />
                                            <label class="form-check-label" for="student">Student</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio"
                                                value="Engineer" id="engineer" />
                                            <label class="form-check-label" for="engineer">Engineer</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio" value="Doctor"
                                                id="doctor" />
                                            <label class="form-check-label" for="doctor">Doctor</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio" value="Artist"
                                                id="artist" />
                                            <label class="form-check-label" for="artist">Artist</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio"
                                                value="Entrepreneur" id="entrepreneur" />
                                            <label class="form-check-label" for="entrepreneur">Entrepreneur</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio"
                                                value="Teacher" id="teacher" />
                                            <label class="form-check-label" for="teacher">Teacher</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio" value="Lawyer"
                                                id="lawyer" />
                                            <label class="form-check-label" for="lawyer">Lawyer</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio" value="Nurse"
                                                id="nurse" />
                                            <label class="form-check-label" for="nurse">Nurse</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio"
                                                value="Architect" id="architect" />
                                            <label class="form-check-label" for="architect">Architect</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio"
                                                value="Scientist" id="scientist" />
                                            <label class="form-check-label" for="scientist">Scientist</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio" value="Writer"
                                                id="writer" />
                                            <label class="form-check-label" for="writer">Writer</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-4">
                                        <div class="form-check">
                                            <input name="job" class="form-check-input" type="radio" value="Chef"
                                                id="chef" />
                                            <label class="form-check-label" for="chef">Chef</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary" onclick="prevStep()">Previous</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
