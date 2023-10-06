from django.db import models
from django.contrib.auth.models import User
#aq vai criar e gerar o banco de dados
# Create your models here.
class Pessoa(models.Model):
    nome = models.CharField(max_length=200, db_column="pes_nome")
    email = models.EmailField(db_column="pes_email")
    senha = models.CharField(max_length=256, db_column="pes_senha")
    perfil= models.IntegerField(default=0, db_column="pes_perfil")
    
    class Meta:
        db_table = 'tb_pessoas'
    
class Comentario(models.Model):
    pessoa = models.ForeignKey(User, on_delete=models.DO_NOTHING, db_column="com_use_pessoa")
    comentario = models.TextField(max_length=6000, db_column="com_comentario")
    class Meta:
        db_table = 'tb_comentarios'
        