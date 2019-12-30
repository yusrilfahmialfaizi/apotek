    <body class="nav-md">
        <div class="row no-print">
            <div class="col-xs-12">
                <!-- <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
            </div>
        </div>
        <table>
            <tr>
                <td style="width:20%; padding:10px" rowspan=" 5"><img src="<?php echo base_url("assets\images\ppni.png") ?>" alt="Logo PPNI"></td>
                <td colspan="2">PRAKTIK MANDIRI</td>
            </tr>
            <tr>
                <td colspan="2">SIPP:440/09/414/2015</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="text-align:justify">ACHMAD SYA'ID</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>Jl. KH. Abdul Aziz, Dsn Kauman <br>Tempurejo - Jember</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>No. Telp. 081216252415</td>
            </tr>
        </table>
        <hr style="color:black" />
        <br />
        <table border="1" cellpadding="10" width="100%">
            <thead>
                <tr>
                    <th style="text-align :center; padding : 5px">No.</th>
                    <th style="text-align :center; padding : 5px">ID Kunjungan</th>
                    <th style="text-align :center; padding : 5px">ID Obat</th>
                    <th style="text-align :center; padding : 5px">Nama Paten</th>
                    <th style="text-align :center; padding : 5px">Nama Generic</th>
                    <th style="text-align :center; padding : 5px">Nama Pabrik</th>
                    <th style="text-align :center; padding : 5px">Jenis Obat</th>
                    <th style="text-align :center; padding : 5px">Jenis </th>
                    <th style="text-align :center; padding : 5px">Qty</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach ($data as $key) { ?>
                <tbody>
                    <tr>
                        <td style="text-align :center; padding : 5px"><?php echo $no++ ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->id_kunjungan ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->id_obat_praktik ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->nama_paten ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->nama_generic ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->nama_pabrik ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->jenis_obat ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->jenis ?></td>
                        <td style="text-align :center; padding : 5px"><?php echo $key->qty ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
        <?php $this->load->view("partials/main/js/js_print") ?>
        <script>
            window.load = print_d();

            function print_d() {
                window.print();
            }
        </script>