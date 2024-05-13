<?
$page_num = "02";
$sub_num = "06";
$page_section = "do";
$sub_section = "control";
$page_info = "WHAT WE DO";
$sub_info = "Quality Control";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<!-- 컨텐츠 내용 -->
				<!-- 모달 레이어팝업 -->
				<!-- S : 2024-04 추가 -->
				<article class="modal-fixed-pop-wrapper inquiry-popup" style="display: block;">
					<div class="modal-fixed-pop-inner">
						<!-- <div class="modal-loading"><span class="loading"></span></div> -->
						<div class="modal-inner-box">
							<div class="modal-inner-header">
								<p class="modal-title">반도체 분석 문의</p>
								<a href="javascript:;" class="modal-close-btn" title="팝업 닫기"><i class="material-icons">&#xE14C;</i></a>
							</div>
							<div class="modal-inner-content">
								<article class="contact-form inquiry-page">
									<!-- 문의 폼 시작 -->
									<form action="./inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
										<section class="bbs-write-con">
											<article class="bbs-inquiry-agree-con">
												<p class="agree-tit">개인정보처리방침</p>
												<div class="inquiry-agreement-con editor">
													<p>개인정보처리방침</p>
												</div>
												<p class="agree-txt">
													<input type="checkbox" id="agree1">
														<label for="agree1">개인정보처리방침에 동의합니다.
													</label>
												</p>
											</article>
											<article class="bbs-write-tbl-box">
												<p class="inquiry-essential-txt"><span class="essential-icon">*</span>표시는 필수 입력 항목입니다.</p>
												<table class="bbs-write-tbl">
													<caption>문의폼입니다.</caption>
													<colgroup>
														<col style="width:25%;">
														<col>
													</colgroup>
													<tbody>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>이름</th>
															<td><input type="text" class="write-input" name="name" required="required"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>이메일</th>
															<td>
																<fieldset class="email-fieldset">
																	<input type="text" class="write-input" name="email1" required="required">
																	<span class="hypen">@</span>
																	<input type="text" class="write-input" name="email2" readonly required="required">
																	<select name="email3" class="write-select" onChange="res();" required="required">
																		<option value="b">메일계정선택</option>
																		<option value="a">직접입력</option>
																		<option value="naver.com">naver.com</option>
																		<option value="nate.com">nate.com</option>
																		<option value="hanmail.net">hanmail.net</option>
																		<option value="gmail.com">gmail.com</option>
																		<option value="hotmail.com">hotmail.com</option>
																		<option value="outlook.com">outlook.com</option>
																		<option value="empal.com">empal.com</option>
																		<option value="dreamwiz.com">dreamwiz.com</option>
																		<option value="lycos.co.kr">lycos.co.kr</option>
																		<option value="yahoo.co.kr">yahoo.co.kr</option>
																		<option value="korea.com">korea.com</option>
																		<option value="paran.com">paran.com</option>
																	</select>
																</fieldset>
															</td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>연락처</th>
															<td>
																<fieldset>
																	<input type="text" class="write-input" name="phone1" title="휴대폰번호 처음" maxlength="8" required="required">
																	<span class="hypen">-</span>
																	<input type="text" class="write-input" name="phone2" title="휴대폰번호 가운데" maxlength="8" required="required">
																	<span class="hypen">-</span>
																	<input type="text" class="write-input"  name="phone3" title="휴대폰번호 마지막" maxlength="8" required="required">
																</fieldset>
															</td>
														</tr>
														<tr>
															<th scope="row"> 회사명</th>
															<td><input type="text" class="write-input width-full" name="company"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>파트명</th>
															<td><input type="text" class="write-input width-full" name="part" required="required"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>의뢰수량</th>
															<td><input type="text" class="write-input" name="request-quantity" required="required"></td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>문의내용</th>
															<td>
																<select name="inquiry-content" class="write-select" required="required">
																	<option value="">위변조(정품비교분석)</option>
																</select>
															</td>
														</tr>
														<tr>
															<th scope="row"><span class="essential-icon">*</span>정품보유여부</th>
															<td>
																<div class="ox-group">
																	<span class="ox">
																		<input type="radio" name="genuine" id="genuine-y">
																		<label for="genuine-y">예</label>
																	</span>
																	<span class="ox">
																		<input type="radio" name="genuine" id="genuine-n">
																		<label for="genuine-n">아니오</label>
																	</span>
																</div>
															</td>
														</tr>
														<tr>
															<th scope="row">상세내용</th>
															<td class="size-full">
																<textarea name="content" class="write-textarea" placeholder="문의내용 (500자 이내로 입력해주세요.)"></textarea>
															</td>
														</tr>
													</tbody>
												</table>
												<dl class="contact">
													<dt>* CONTACT:</dt>
													<dd>이메일 <a href="mailto:info@microworks.co.kr">info@microworks.co.kr</a></dd>
													<dd>문의전화 <a href="tel:02-6112-7328">02-6112-7328</a></dd>
												</dl>
											</article>
											<!--
												기본 : 센터정렬 / 좌측정렬 : cm-btn-align-left / 우측정렬 : cm-btn-align-right / 100% 버튼 : cm-btn-long-controls
											-->
											<div class="button-layout bottom-buttons">
												<button type="button" class="button" onClick="sendit();"><strong>작성완료</strong></button>
												<a href="/" class="button type-secondary"><strong>취소</strong></a>
											</div>
										</section>
									</form>
									<!-- // 문의 폼 끝 -->
								</article>
							</div>
						</div>
					</div>
				</article>
				<!-- E : 2024-04 추가 -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

