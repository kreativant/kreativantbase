#######################################
#### BACKENDLAYOUT: Default ####
#######################################
mod {
    web_layout {
        BackendLayouts {
            default {
                title = Default
                config {
                    backend_layout {
                        colCount = 4
                        rowCount = 3
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = Header
                                        colPos = 0
                                        colspan = 4
                                    }
                                }
                            }
                            2 {
                                columns {
                                    1 {
                                        name = Content
                                        colPos = 12
                                        colspan = 4
                                    }
                                }
                            }
                            3 {
                                columns {
                                    1 {
                                        name = Footer: Spalte 1
                                        colPos = 101
                                        colspan = 1
                                    }
                                    2 {
                                        name = Footer: Spalte 2
                                        colPos = 102
                                        colspan = 1
                                    }
                                    3 {
                                        name = Footer: Spalte 3
                                        colPos = 103
                                        colspan = 1
                                    }
                                    4 {
                                        name = Footer: Spalte 4
                                        colPos = 104
                                        colspan = 1
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}