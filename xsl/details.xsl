<?xml version="1.0" encoding="ISO-8859-1"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:param name="ID"/>
	
	<xsl:template match="/">
		<xsl:for-each select="//project">
			<xsl:value-of select="@id"/>
		</xsl:for-each>
		<xsl:value-of select="$ID"/>
		
		

	</xsl:template>
	
</xsl:stylesheet>