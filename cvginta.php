<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume CV Design</title>
	<link rel="stylesheet" href="cv.css">
</head>
<body>

	 <?php
	 //data php untuk resume left dan resume right

// data bagian contact informasi
    $nama = "Ginta Khairunisa";
    $telp = "0852 19067686";
    $email = "gintakhairunisa@gmail.com";
    $ttl = "26 Juli 2000";
    $alamat = "Jl.Jatinegara Kaum, Jakarta Timur";
// data untuk skill
    $word = "MS.WORD";
    $excel = "MS.EXCEL";
    $html = "HTML";
    $css = "CSS";
// data untuk Hobbies
    $music = "MUSIC";
    $movie = "MOVIE";
    $sepedah = "BICYCLE";
    $renang = "SWIMMING";

    ?>

	<div class="wrapper">
		<div class="resume">
			<div class="left">
				<!-- bagian kiri pada cv  -->
				<div class="img_holder">
					<img src="picture.jpg" alt="picture">
				</div>
				<!-- Bagian Contact Informasi-->
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $telp ?></div>
									<!-- Memanggil data PHP yang sudah dibuat di atas untuk bagian contact  -->
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $email ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $ttl ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $alamat ?></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Bagian skill -->
				<div class="skills_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="skills">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $word ?></div>
									<!-- Memanggil data PHP yang sudah dibuat di atas untuk bagian skill  -->
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $excel ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $html ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $css ?></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Bagian Hobbies pada kiri cv-->
				<div class="hobbies_wrap pb">
					<div class="title">
						hobbies
					</div>
					<div class="hobbies">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $music ?></div>
									<!-- Memanggil data PHP yang sudah dibuat di atas untuk bagian Hobbies  -->
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $movie ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $sepedah ?></div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"></div>
									<div class="text"><?php echo $renang ?></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Membuat bagian pada kanan cv -->
			<div class="right">
				<div class="header">
				<!-- untuk bagian atas cv--> 
					<div class="name_role">
						<div class="name">
							<?php echo $nama ?>
							<!-- Memanggil data PHP yang sudah dibuat di atas untuk bagian kanan  -->
						</div>
						<div class="role">
							STUDENT COLLAGE
						</div>
					</div>
					<div class="about">
						 I am a hard working, honest individual. I am a good timekeeper, always willing to learn new skills.I am friendly, helpful and polite, have a good sense of humour. I am able to work independently in busy environments and also within a team setting. I am outgoing and tactful, and able to listen effectively when solving problems.
					</div>
				</div>
				<div class="right_inner">
					<!-- untuk bagian dalam bawah header dan samping resume-->
					<div class="exp">
						<div class="title">
							experience
						</div>
						<div class="exp_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											2019 - 2020
										</div>
										<div class="info">
											<p class="info_place">
												PT. KINOKUNIA BUKINDO
											</p>
											<p class="info_com">
												Sales/Staff
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2017 - 2017
										</div>
										<div class="info">
											<p class="info_place">
												TAX OFFICE
											</p>
											<p class="info_com">
												Internship
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											2020 - Present
										</div>
										<div class="info">
											<p class="info_place">
												BINA SARANA INFORMATIKA UNIVERSITY
											</p>
											<p class="info_com">
												Information System Department
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2015 - 2018
										</div>
										<div class="info">
											<p class="info_place">
												40 VOCATIONAL HIGH SCHOOL
											</p>
											<p class="info_com">
												Administration Office
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2012 - 2015
										</div>
										<div class="info">
											<p class="info_place">
												74 JUNIOR HIGH SCHOOL
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2006 - 2012
										</div>
										<div class="info">
											<p class="info_place">
												03 ELEMENTARY SCHOOL
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					<div class="certificate">
						<div class="title">
							Certificate
						</div>
						<div class="certi_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											
										</div>
										<div class="info">
											<p class="info_place">
												CERTIFICATE OF INTERNSHIP
											</p>
											<br><br>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											
										</div>
										<div class="info">
											<p class="info_place">
												CERTIFICATE OF COMPETENCE
											</p>
											<br><br>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											
										</div>
										<div class="info">
											<p class="info_place">
												CERTIFICATE OF PRACTICAL EXAM
											</p>
											<br><br>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											
										</div>
										<div class="info">
											<p class="info_place">
												CERTIFICATE OF PAKLARING
											</p>
											<br><br>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>