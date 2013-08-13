<?xml version="1.0" encoding="ISO-8859-1"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:param name="page"/>
	<xsl:variable name="numPerPage">5</xsl:variable>
	<xsl:template match="/">

		<xsl:choose>
			<xsl:when test="$page &lt; 0">
				<li>
					<xsl:for-each select="//project">
						<xsl:sort select="name"/>

						<div>
							<h3 class="blog">
								<xsl:choose>
								<xsl:when test="detail">
									<a href="details.php?id={@id}">
										<xsl:value-of select="name"/>
										<br/>
									</a>
								</xsl:when>
								<xsl:otherwise><xsl:value-of select="name"/></xsl:otherwise>
								</xsl:choose>
							</h3>

						</div>

					</xsl:for-each>
				</li>
			</xsl:when>

			<xsl:otherwise>
				<xsl:variable name="startNumber" select="($page - 1) * $numPerPage + 1"/>

				<xsl:variable name="endNum" select="$startNumber + $numPerPage"/>



				<xsl:call-template name="Loop">
					<xsl:with-param name="number" select="$startNumber"/>
					<xsl:with-param name="endNumber" select="$endNum"/>
				</xsl:call-template>
				<br/>
				<br/>
				<xsl:call-template name="PageLinks">
					<xsl:with-param name="endNum" select="$endNum"/>
					<xsl:with-param name="startNum" select="$startNumber"/>
				</xsl:call-template>
			</xsl:otherwise>
		</xsl:choose>



	</xsl:template>
	<xsl:template name="PageLinks">
		<xsl:param name="endNum"/>
		<xsl:param name="startNum"/>

		<!-- next page previous page links -->
		<ul class="paging">
		
			<xsl:variable name="prevPage">
				<xsl:value-of select="$page -1"/>
			</xsl:variable>
			<xsl:if test="1 &lt; $page"><!-- if not on page one, print previous a first page links -->
				<li>
					<a href="?page=1">&lt;&lt;&lt;</a>
				</li>
				<li>
					<a href="?page={$prevPage}">
					Previous Page
					</a>
				</li>
			</xsl:if>

			<xsl:variable name="NumPages"><!-- this is to calculate the number of page links to print-->
				<xsl:choose>
					<xsl:when test="(floor((count(//project)) div $numPerPage) * $numPerPage) &lt; count(//project)"><!-- not an exact multiple of $numPerPage-->
						<xsl:value-of select="floor((count(//project)) div $numPerPage) + 1"/>
					</xsl:when>
					<xsl:otherwise>
						<xsl:value-of select="floor((count(//project)) div $numPerPage)"/>
					</xsl:otherwise>
				</xsl:choose>
			
			</xsl:variable>
			<xsl:call-template name="PageLoop">
				<xsl:with-param name="NumPages" select="$NumPages"/>
				
				<xsl:with-param name="CurPage" select="1"/><!-- not actually current page, just the internal counter -->

			</xsl:call-template>
			<xsl:if test="($page * $numPerPage) &lt; (count(//project))">
				<xsl:variable name="nextPage">
					<xsl:value-of select="$page + 1"/>
				</xsl:variable>
				<li>
					<a href="?page={$nextPage}">
					Next Page
					</a>
				</li>
				<li>
					<a href="?page={floor((count(//project)) div 5) + 1}">
					&gt;&gt;&gt;
					</a>
				</li>
			</xsl:if>	
		</ul>

	</xsl:template>
	<xsl:template name="PageLoop">
		<xsl:param name="NumPages"/>
		<xsl:param name="CurPage"/>
		<!-- count for the loop-->


		<xsl:if test="$NumPages &gt; $CurPage - 1">

			<xsl:choose>
				<xsl:when test="$CurPage = $page">
					<li>
						<xsl:value-of select="$CurPage"/>
					</li>
				</xsl:when>
				<xsl:otherwise>
					<li>
						<a href="?page={$CurPage}">
							<xsl:value-of select="$CurPage"/>
						</a>
					</li>
				</xsl:otherwise>
			</xsl:choose>
			<xsl:call-template name="PageLoop">
				<xsl:with-param name="NumPages" select="$NumPages"/>
				<xsl:with-param name="CurPage" select="$CurPage + 1"/>
			</xsl:call-template>
		</xsl:if>
	</xsl:template>

	<xsl:template name="Loop">
		<xsl:param name="number"/>
		<xsl:param name="endNumber"/>
		<xsl:if test="$number != $endNumber ">
			<xsl:if test="//project[$number]">
				<li>
					<xsl:if test="//project[$number]/image">
						<div class="featured">
							<img src="{//project[$number]/image/src}" alt="{//project[$number]/image/src}" width="260px" height="260px"/>

						</div>
					</xsl:if>
					<div>
						<h3>
							<xsl:value-of select="//project[$number]/name"/> <xsl:if test="//project[$number]/date"> : <xsl:value-of select="//project[$number]/date"/></xsl:if>
						</h3>
						<p>
							<xsl:copy-of select="//project[$number]/description"/>
						</p>
						<!-- BUG does not like <iframe ...> tags-->
						<xsl:if test="//project[$number]/detail">
							<a href="details.php?id={//project[$number]/@id}">
								<img src="Images/link_plus.jpg"/>
							</a>
						</xsl:if>
					</div>
				</li>
				<br/>
				<!--<img src="images/separator.jpg"/>-->
				<xsl:call-template name="Loop">
					<xsl:with-param name="number" select="$number + 1"/>
					<xsl:with-param name="endNumber" select="$endNumber"/>
				</xsl:call-template>

			</xsl:if>
		</xsl:if>
	</xsl:template>
</xsl:stylesheet>