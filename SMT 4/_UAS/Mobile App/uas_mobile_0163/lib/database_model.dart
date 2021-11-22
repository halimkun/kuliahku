import 'dart:io';

import 'package:sqflite/sqflite.dart' as sql;

class DatabaseModel {

  static Future<void> createTables(sql.Database database) async {
    await database.execute("""CREATE TABLE televisi(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        merek_tv TEXT,
        seri_tv TEXT,
        tipe_layar TEXT,
        ukuran_layar TEXT,
        tinggi_layar TEXT,
        lebar_layar TEXT
      )"""
    );
  }

  static Future<sql.Database> db() async {
    return sql.openDatabase(
      'kindacode.db',
      version: 1,
      onCreate: (sql.Database database, int version) async {
        await createTables(database);
      },
    );
  }

  static Future createItems (
    String mrktv,
    String seritv,
    String tipeLayar,
    String ukuranLayar,
    String tinggiLayar,
    String lebarLayar,
  ) async {
    final db = await DatabaseModel.db();

    final data = {
      'merek_tv': mrktv, 
      'seri_tv': seritv,
      'tipe_layar': tipeLayar,
      'ukuran_layar': ukuranLayar,
      'tinggi_layar': tinggiLayar,
      'lebar_layar':lebarLayar
    };
    final id = await db.insert('televisi', data, conflictAlgorithm: sql.ConflictAlgorithm.replace);
    return id;
  }

}