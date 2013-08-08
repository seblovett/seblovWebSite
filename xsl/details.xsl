<?xml version="1.0" encoding="ISO-8859-1"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:param name="id"/>

	<xsl:template match="/">
		<xsl:for-each select="//project">
			<xsl:if test="@id = $id">

				<xsl:choose>
					<xsl:when test="detail">
						<!--<xsl:for-each select="detail//section">
							<div class="body">
								<ul>
									<li>
										<xsl:if test="@image">
											<div class="featured">
												<a href="{@image}">
													<img src="{@image}" width="260px" />
												</a>
											</div>
										</xsl:if>
										<div>
											<h3>
												<xsl:value-of select="@name"/>
											</h3>

											<xsl:copy-of select="p"/>

										</div>
									</li>
								</ul>

							</div>
						</xsl:for-each>-->
						<xsl:copy-of select="detail"/>
					</xsl:when>
					<xsl:otherwise>
						<div class="body"><ul><li><div><h3>Sorry!</h3><p class="blog">Sorry! I have not got around to filling in some details for this project yet. Please return here soon to read more! <br/>Meanwhile, please continue <a href="projects.php">browsing my projects here </a>or go back.</p></div></li></ul></div>
						
					</xsl:otherwise>
				</xsl:choose>



			</xsl:if>

		</xsl:for-each>




	</xsl:template>

</xsl:stylesheet>