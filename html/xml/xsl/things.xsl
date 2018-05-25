<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns:xlink="http://www.w3.org/1999/xlink">

	<xsl:template match="*[@xlink:href]">
		<xsl:apply-templates select="document(@xlink:href)"/>
	</xsl:template>

	<xsl:template match="loseActions">
		<xsl:for-each select="loseAction">
			<div class="teal text-white padding-4">
				<p><xsl:apply-templates/></p>
			</div>
		</xsl:for-each>
	</xsl:template>

	<xsl:template match="strong">
		<strong>
			<xsl:apply-templates/>
		</strong>
	</xsl:template>

	<xsl:template match="b">
		<b>
			<xsl:apply-templates/>
		</b>
	</xsl:template>

	<xsl:template match="i">
		<i>
			<xsl:apply-templates/>
		</i>
	</xsl:template>

	<xsl:template match="em">
		<em>
			<xsl:apply-templates/>
		</em>
	</xsl:template>

	<xsl:template match="/">
		<xsl:apply-templates/>
	</xsl:template>

</xsl:stylesheet>
