<footer>
	<script src="includes/js/jquery.js"></script>
	<script src="includes/js/summernote.js"></script>
	<script src="includes/js/bootstrap.js"></script>
	<script src="includes/js/datatables.js"></script>
	<script src="includes/js/summernote-pt-BR.js"></script>
	<script>
		// Inicio de JS do Jquery
		$(document).ready(function() {
			$('#respostas-table').DataTable({
				"language": {
					"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
				}
			});
			
		});
		
		// fim do JS do Jquery

		// Inicio de JS do Summernote
		$('#summernote').summernote({
			toolbar: [
				['font', ['bold', 'underline','italic','clear']],
				['color', ['color']],
				['para', ['ul', 'ol', 'paragraph']],
				['table', ['table']],
				['insert', ['link', 'picture']],
				['view', ['fullscreen', 'codeview', 'help']],
			],
			lang: 'pt-BR'
		});
		// Fim do JS do Summernote
	</script>
</footer>
</body>

</html>
